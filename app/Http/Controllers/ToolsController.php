<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Models\Districts;
use App\Models\Province;

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

        return Districts::where("city_id", $request->city)->get();
    }
}