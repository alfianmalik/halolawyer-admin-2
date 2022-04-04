<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    //

    public function index()
    {
        # code...
        $specializations = Specialization::paginate(10);

        return view('admin.specialization.index', compact('specializations'));
    }

    public function store(Request $request)
    {
        # code...
        return view('admin.specialization.store');
    }

    public function storePost(Request $request)
    {
        $specialization = new Specialization();

        $specialization->create([
            'name' => $request->name,
            'case_category_id' => $request->description,
            'is_activated' => $request->is_activated=="on"?1:0
        ]);

        return redirect()->route("specialization.index");
    }

    /**
     * 
     */
    public function edit(Request $request)
    {
        # code...
        $specialization = Specialization::find($request->id);

        return view('admin.specialization.edit', compact('specialization'));
    }

    /**
     * 
     */
    public function editPost(Request $request)
    {
        $specialization = Specialization::find($request->id);

        $specialization->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_activated' => $request->is_activated=="on"?1:0
        ]);

        return redirect()->route("specialization.index");
    }
}
