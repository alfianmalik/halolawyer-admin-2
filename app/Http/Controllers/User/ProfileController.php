<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;

use App\Models\Administrator;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('user.profile');
    }

    public function update(Request $request, Administrator $user)
    {
    	// if ($request->password) {
    	// 	$password = Hash::make($request->password);
    	// }else{
    	// 	$password = $request->old_password;
    	// }

    	// $request->request->add(['password' => $password]);
		// dd($user);
    	$user->update($request->all());
    	return back()->with('success','Proflie updated successfully');
    }
}
