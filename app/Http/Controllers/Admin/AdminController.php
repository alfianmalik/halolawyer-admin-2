<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::whereDate('created_at', '=', Carbon::today())->get();

    	return view('admin.index', compact("orders"));
    }
}
