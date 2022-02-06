<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(Request $request)
	{
		// return view('admin.user.index');
		// $users = User::paginate(10);

		$users = new User;
		if ($request->q) {
			$users = $users->where("first_name", "like", "%".$request->q."%")
								->orWhere("last_name", "like", "%".$request->q."%");
		}

		$users = $users->paginate(15);

		return view('admin.user.index', compact("users"));
	}
	
	public function new(Request $request)
	{
		# code...

		return view('admin.user.store');
	}	

	public function newPost(Request $request)
	{
		# code...

		// return view('admin.user.index', compact("lawyers"));
	}	

	public function edit(Request $request)
	{
		# code...
		$user = User::whereUuid($request->uuid)->first();

		return view('admin.user.edit', compact("user"));
	}	

	public function editPost(Request $request)
	{
		# code...

		return redirect()->back();
	}	
}
