<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\CaseCategory;
use App\Models\Lawyers;
use App\Models\LawyersAccountNumber;
use App\Models\Specialization;
use App\Utilities\ImageFileProcessor;
use App\Utilities\ImageProcessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\React;

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

	/**
	 * 
	 */
	public function new(Request $request)
	{
		# code...

		$case_categories = CaseCategory::all();
		$specialization = Specialization::all();

		return view('admin.lawyer.store', compact('case_categories', "specialization"));
	}	

	/**
	 * 
	 */
	public function newPost(Request $request)
	{

		$validated = $request->validate([
			'email' => 'required|unique:lawyers|max:255',
			'name' => 'required',
		]);

		DB::transaction(function() use ($request)
		{
		
			$lawyer = new Lawyers();
			$first_name = split_name($request->name)[0];
			$last_name = split_name($request->name)[1];

			$password = $request->password_generate?$request->password_generate:"secret";

			$lawyer = $lawyer->create([
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $request->email,
				'password' => Hash::make($password),
				'phone' => $request->phone,
				'bod_place' => $request->place_of_birth,
				'uuid' => Str::uuid(),
				'slug' => Str::slug($request->name),
				'bod' => $request->bod,
				'gender' => $request->gender,
				'work' => $request->work,
				'religion' => $request->religion,
				'profile_picture' => $request->hasFile('profile_picture')?(new ImageProcessor($request->profile_picture, Lawyers::APP_URL_PROFILE_PICTURE))->upload()->url():"",
				'location' => $request->location,
				'province_id' => $request->province_id,
				'city_id' => $request->city_id,
			]);

			$lawyer->account_number()->create([
				'bank_name' => $request->bank_name,
				'no_rekening' => $request->no_rekening,
				'nama_penerima' => $request->nama_penerima,
			]);

			$law_firm = $lawyer->lawyers_law_firm()->create([
				'law_firm_name' => $request->office_name,
				'address' => $request->alamat,
				'city' => $request->city,
				'province' => $request->province,
				'postal_code' => $request->postal_code,
				'email_law_firm' => $request->office_email,
				'phone' => $request->office_phone,
				'id_card_number' => $request->no_izin_advokat,
				'years_of_advocate_swearing' => $request->advokat_year,
				'long_working_years' => $request->long_work_experience,
				'probono' => $request->probono=="on"?true:false
			]);
			
			if ($request->law_firm_file) {
				foreach ($request->law_firm_file as $key => $fileuploadlaw) {
					$law_firm->lawyers_law_firm_files()->create([
						'files' => (new ImageFileProcessor($fileuploadlaw, Lawyers::APP_URL_LAW_FIRM_FILE, $fileuploadlaw->getClientOriginalExtension()))->upload()->url()
					]);
				}
				
			}

			if ($request->pendidikanformal) {
				foreach ($request->pendidikanformal as $keys => $items) {
					$lawyer->educations()->create([
						'education_university' => $items['university'],
						'education_university_department' => $items['jurusan'],
						'education_level_education' => $items['level_education']
					]);
				}
			}

			if ($request->pendidikanonformal) {
				foreach ($request->pendidikanonformal as $keys => $items) {
					$lawyer->lawyers_unformal_educations()->create([
						'education_type' => $items['jenis_pendidikan'],
						'education_title' => $items['tema_pendidikan'],
						'education_year' => $items['tahun'],
						'certificate' => $request->hasFile($items['certificate'])?(new ImageFileProcessor($items['certificate'], "", ""))->upload()->url():""
					]);
				}
			}

			if ($request->specialization) {
				foreach ($request->specialization as $keys => $items) {
					$lawyer->lawyers_specialization()->create([
						'case_category_id' => $items['case'],
						'specialization_id' => $items['specialization']
					]);
					
					$case = CaseCategory::find($items['case']);
					$lawyer->lawyers_category()->create([
						'case_category_id' => $items['case'],
						'name' => $case->name,
					]);
				}
			}

			$lawyer->lawyers_workarea()->create([
				'province' => $request->province_work_area,
				'city' => $request->city_work_area
			]);

			if ($request->caseexperience) {
				foreach ($request->caseexperience as $keys => $items) {
					$lawyer->lawyers_case_experience()->create([
						'case_category_id' => $items['case'],
						'title' => $items['judul_perkara'],
						'year' => $items['year'],
						'type' => $items['jenis'],
						'reason' => $items['reason'],
					]);
				}
			}

		});

		return redirect()->route("lawyers")->with("status", "Successfully adding Mitra");;
	}	

	public function edit(Request $request)
	{
		# code...
		$case_categories = CaseCategory::all();
		$specialization = Specialization::all();
		$lawyer = Lawyers::whereUuid($request->uuid)->first();

		return view('admin.lawyer.edit', compact("lawyer", "case_categories", "specialization"));
	}	

	/**
	 * 
	 */
	public function editPost(Request $request)
	{
		# code...

		// return view('admin.lawyer.index', compact("lawyers"));
	}	

	/**
	 * 
	 */
	public function delete(Request $request)
	{
		$lawyer = Lawyers::whereUuid($request->uuid)->first();
		$lawyer->delete();

		return redirect()->route("lawyers");
	}

	/**
	 * 
	 */
	public function deletes(Request $request)
	{
		$manies = explode(",", $request->deletemany);
        foreach ($manies as $many) {
            $lawyer = Lawyers::find($many);
			$lawyer->delete();
        }

        return redirect()->back()->with("status", "Successfully delete Mitra");
	}

	/**
	 * 
	 */
	public function suspend(Request $request)
	{
		$lawyer = Lawyers::whereUuid($request->uuid)->first();
		$lawyer->update([
			'is_suspend' => true
		]);

		return redirect()->back()->with("status", "Successfully suspend Mitra");
	}
}
