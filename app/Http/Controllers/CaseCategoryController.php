<?php

namespace App\Http\Controllers;

use App\Models\CaseCategory;
use App\Utilities\ImageProcessor;
use Illuminate\Http\Request;

class CaseCategoryController extends Controller
{
    //

    public function index(Request $request)
    {
        # code...
        $casecategories = new CaseCategory();
        if ($request->q) {
            $casecategories = $casecategories->where("name", "like", "%".$request->q."%");
        }   

        $casecategories = $casecategories->paginate(10);

        return view('admin.casecategory.index', compact('casecategories'));
    }

    public function store(Request $request)
    {
        # code...
        return view('admin.casecategory.store');
    }

    public function storePost(Request $request)
    {
        $casecategory = new CaseCategory();

        $casecategory->create([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->hasFile('icon')?(new ImageProcessor($request->icon, CaseCategory::APP_URL_ICON))->upload()->url():"",
            'is_activated' => $request->is_activated=="on"?1:0
        ]);

        return redirect()->route("casecategory.index");
    }

    /**
     * 
     */
    public function edit(Request $request)
    {
        # code...
        $casecategory = CaseCategory::find($request->id);

        return view('admin.casecategory.edit', compact('casecategory'));
    }

    /**
     * 
     */
    public function editPost(Request $request)
    {
        $casecategory = CaseCategory::find($request->id);

        $casecategory->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->hasFile('icon')?(new ImageProcessor($request->icon, CaseCategory::APP_URL_ICON))->upload()->url():"",
            'is_activated' => $request->is_activated=="on"?1:0
        ]);

        return redirect()->route("casecategory.index");
    }
}
