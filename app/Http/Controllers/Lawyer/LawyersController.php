<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\CaseCategory;
use App\Models\Lawyers;
use App\Models\LawyersAccountNumber;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LawyersController extends Controller
{
    //
    public function index(Request $request)
	{
		$lawyers = new Lawyers;
		if ($request->q) {
			$lawyers = $lawyers->where("first_name", "like", "%".$request->q."%")
								->orWhere("last_name", "like", "%".$request->q."%");
		}

		$lawyers = $lawyers->orderBy('id', 'desc')->paginate(15);

		return view('admin.lawyer.index', compact("lawyers"));
	}

	public function new(Request $request)
	{
		# code...

		$case_categories = CaseCategory::all();
		$specialization = Specialization::all();

		return view('admin.lawyer.store', compact('case_categories', "specialization"));
	}	

	public function newPost(Request $request)
	{
		$lawyer = new Lawyers();
		$first_name = split_name($request->name)[0];
		$last_name = split_name($request->name)[1];

		$lawyer = $lawyer->create([
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $request->email,
			'password' => Hash::make($request->password_generate),
			'phone' => $request->phone,
			'bod_place' => $request->place_of_birth,
			'uuid' => Str::uuid(),
			'slug' => Str::slug($request->name),
			'bod' => $request->bod,
			'gender' => $request->gender,
			'work' => $request->work,
			'religion' => $request->religion,
			'profile_picture' => $request->profile_picture,
			'location' => $request->location,
			'province_id' => $request->province_id,
			'city_id' => $request->city_id,
		]);

		$lawyer->account_number()->create([
			'bank_name' => $request->bank_name,
			'no_rekening' => $request->no_rekening,
			'nama_penerima' => $request->nama_penerima,
		]);

		$lawyer->lawyers_workarea->create([
			'province' => $request->province_work_area,
            'city' => $request->city_work_area
		]);

		$lawyer->lawyers_workarea->create([
			'province' => $request->province_work_area,
            'city' => $request->city_work_area
		]);

		return redirect()->route("lawyers");
	}	

	public function edit(Request $request)
	{
		# code...

		// return view('admin.lawyer.index', compact("lawyers"));
	}	

	public function editPost(Request $request)
	{
		# code...

		// return view('admin.lawyer.index', compact("lawyers"));
	}	
}
