<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		// return view('admin.user.index');
		$users = User::paginate(10);

		return view('admin.user.index', compact("users"));
	}
}
