<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawyersController extends Controller
{
    //
    public function index()
	{
		return view('admin.lawyer.index');
	}
}
