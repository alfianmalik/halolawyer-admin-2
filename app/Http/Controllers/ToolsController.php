<?php

namespace App\Http\Controllers;

use App\Models\CaseCategory;
use Illuminate\Http\Request;
use App\Models\Cities;
use App\Models\Districts;
use App\Models\Province;
use App\Models\Specialization;

class ToolsController extends Controller
{
    //
    /**
     * @return Province[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getProvinces()
    {
        return Province::all();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getCities(Request $request)
    {

        return Cities::where('province_id', $request->province)->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getDistricts(Request $request)
    {

        // return Districts::where("city_id", $request->city)->get();
    }

    public function getSpesialization(Request $request)
    {
        $category = CaseCategory::find($request->category);

        return $category->specializations;
    }

    public function getCategories(Request $request)
    {
        return CaseCategory::all();
    }
}
