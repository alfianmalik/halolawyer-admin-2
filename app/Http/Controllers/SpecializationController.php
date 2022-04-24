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
        $specializations = Specialization::orderBy("id", "desc")->paginate(10);
    
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
        $specialization = $specialization->create([
            'name' => $request->name,
            'is_activated' => $request->is_activated=="on"?1:0,
        ]);

        foreach($categories as $category) {
            $category = CaseCategory::where("id", "=", $category->id)->first();
            $category->specializations()->save($specialization);
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
        $categories = $specialization->case_category;
        
        return view('admin.specialization.edit', compact('specialization', "categories"));
    }

    /**
     * 
     */
    public function editPost(Request $request)
    {
        $specialization = Specialization::find($request->id);
        $categories = json_decode($request->categories);    

        $specialization->update([
            'name' => $request->name,
            'is_activated' => $request->is_activated=="on"?1:0,
        ]);
        
        foreach($categories as $category) {
            $category = CaseCategory::where("id", "=", $category->id)->first();
            $category->specializations()->sync($specialization);
        }

        return redirect()->route("specialization.index");
    }

    public function delete(Request $request)
    {
        $hash = Hash::make($request->password);

        if (Hash::check($hash,auth()->user()->password)) {
            return redirect()->back()->with("error", "");
        }

        $specialization = Specialization::where('id', $request->id);
        $specialization->delete();

        return redirect()->back()->with("success", "");
    }
}
