<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Lawyers;
use Illuminate\Http\Request;

class LawyersController extends Controller
{
    //
    public function index()
	{
		$lawyers = Lawyers::paginate(15);

		return view('admin.lawyer.index', compact("lawyers"));
	}
}
