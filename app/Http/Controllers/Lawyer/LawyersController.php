<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Lawyers;
use Illuminate\Http\Request;

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

		$lawyers = $lawyers->paginate(15);

		return view('admin.lawyer.index', compact("lawyers"));
	}

	public function new(Request $request)
	{
		# code...

		return view('admin.lawyer.store');
	}	

	public function newPost(Request $request)
	{
		# code...

		// return view('admin.lawyer.index', compact("lawyers"));
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
