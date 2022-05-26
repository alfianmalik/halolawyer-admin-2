<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\DocumentMaking;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function mitra(Request $request)
    {
        # code...
        $services = ServiceDetails::paginate(10);

        return view("admin.product.mitra", compact("services"));
    }

    public function mitraStore(Request $request)
    {
        # code...

        return view("admin.product.mitra-store");
    }

    public function mitraPostStore(Request $request)
    {
        # code...
        $service = ServiceDetails::find($request->id);
    }

    public function mitraEdit(Request $request)
    {
        # code...
        $service = ServiceDetails::find($request->id);

        return view("admin.product.mitra-edit", compact("service"));
    }

    public function mitraPostEdit(Request $request)
    {
        # code...
        $service = ServiceDetails::find($request->id);

        // return view("admin.product.mitra-edit", compact("service"));
    }

    public function document(Request $request)
    {
        # code...
        # code...
        $documents = DocumentMaking::paginate(10);

        return view("admin.product.document", compact("documents"));
    }
}
