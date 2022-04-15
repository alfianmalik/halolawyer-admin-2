<?php

namespace App\Http\Controllers;

use App\Models\CaseCategory;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SpecializationController extends Controller
{
    //

    public function index()
    {
        # code...
        $specializations = Specialization::groupBy("name", "external_id", "is_activated")->select("name", "external_id", "is_activated")->get();
        $specializations = $specializations->map(function ($specialization) {
            return collect([
                'external_id'  => $specialization->external_id,
                'name'         => $specialization->name,
                'is_activated'         => $specialization->is_activated,
                'case_category'=> Specialization::where("name", "=", $specialization->name)->get(["case_category_id"])->toArray(),
            ]);
        });

        $specializations = collect($specializations);
    
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
        $external_id = unique_code(6);
        foreach($categories as $category) {
            $specialization->create([
                'name' => $request->name,
                'case_category_id' => $category->id,
                'is_activated' => $request->is_activated=="on"?1:0,
                'external_id' => $external_id
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
        $categories = Specialization::where("external_id", $request->id)->pluck("case_category_id");
        $categories = $categories->map(function($category) {
            $cat = CaseCategory::where("id", $category)->first();
            return collect([
                'name'          => $cat->name,
                "id"            => $cat->id,
            ]);
        });

        $specialization = Specialization::where("external_id", $request->id)->first();

        return view('admin.specialization.edit', compact('specialization', "categories"));
    }

    /**
     * 
     */
    public function editPost(Request $request)
    {
        $specialization = Specialization::where("external_id", $request->id);
        $specialization->forceDelete();

        $specialization = new Specialization();
        $categories = json_decode($request->categories);        
        foreach($categories as $category) {
            $specialization->create([
                'name' => $request->name,
                'case_category_id' => $category->id,
                'is_activated' => $request->is_activated=="on"?1:0,
                'external_id' => $request->id
            ]);
        }

        return redirect()->route("specialization.index");
    }

    public function delete(Request $request)
    {
        $hash = Hash::make($request->password);

        if (Hash::check($hash,auth()->user()->password)) {
            return redirect()->back()->with("error", "");
        }

        $specialization = Specialization::where('external_id', $request->id);
        $specialization->delete();

        return redirect()->back()->with("success", "");
    }
}
