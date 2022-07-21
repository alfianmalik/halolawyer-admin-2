<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
		$users = $users->orderBy('id', 'desc')->paginate(15);

		return view('admin.user.index', compact("users"));
	}

	public function new(Request $request)
	{
		# code...

		return view('admin.user.store');
	}

    /**
     *
     */
	public function newPost(Request $request)
	{
		# code...
        $validated = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
            "phone" => "required|numeric",
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->uuid = Str::uuid();
        $user->slug = Str::slug($request->first_name . " " . $request->last_name);
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route("user")->with("success", "User created successfully");
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
