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
        $specializations = Specialization::grouBy('name')->paginate(10);

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
        $categories = json_decode($request->categories);
        foreach($categories as $category) {
            $specialization->create([
                'name' => $request->name,
                'case_category_id' => $category->id,
                'is_activated' => $request->is_activated=="on"?1:0
            ]);
        }

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

        $categories = json_decode($request->categories);
        foreach($categories as $category) {
            $specialization->create([
                'name' => $request->name,
                'case_category_id' => $category->id,
                'is_activated' => $request->is_activated=="on"?1:0
            ]);
        }

        return redirect()->route("specialization.index");
    }
}
