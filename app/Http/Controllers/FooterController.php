<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function aboutus()
    {
        # code...
        $footer = Footer::where('footer_type', 'aboutus')->first();

        return view("admin.footer.aboutus", compact("footer"));
    }

    public function contactus()
    {
        # code...
        $footer = Footer::where('footer_type', 'contactus')->first();
        
        return view("admin.footer.contactus", compact("footer"));
    }

    public function faq()
    {
        # code...
        $footer = Footer::where('footer_type', 'faq')->first();
        
        return view("admin.footer.faq", compact("footer"));
    }

    public function useragreement()
    {
        # code...
        $footer = Footer::where('footer_type', 'useragreement')->first();

        return view("admin.footer.useragreement", compact("footer"));
    }

    public function privacy()
    {
        # code...
        $footer = Footer::where('footer_type', 'privacypolicy')->first();

        return view("admin.footer.privacy", compact("footer"));
    }

    public function cookiesprivacy()
    {
        # code...
        $footer = Footer::where('footer_type', 'cookiespolicy')->first();

        return view("admin.footer.cookiesprivacy", compact("footer"));
    }

    public function copyright()
    {
        # code...
        $footer = Footer::where('footer_type', 'copyrightpolicy')->first();

        return view("admin.footer.copyright", compact("footer"));
    }

    public function brand()
    {
        # code...
        $footer = Footer::where('footer_type', 'brandpolicy')->first();

        return view("admin.footer.brand", compact("footer"));
    }

    public function mitraagreement()
    {
        # code...
        $footer = Footer::where('footer_type', 'mitraagreement')->first();

        return view("admin.footer.mitraagreement", compact("footer"));
    }

    public function gabunghalolawyer()
    {
        # code...
        $footer = Footer::where('footer_type', 'gabunghalolawyer')->first();

        return view("admin.footer.gabunghalolawyer", compact("footer"));
    }

    public function kontributorhalolawyer()
    {
        # code...
        $footer = Footer::where('footer_type', 'kontributorhalolawyer')->first();

        return view("admin.footer.gabunghalolawyer", compact("footer"));
    }

    public function cooperation()
    {
        # code...
        $footer = Footer::where('footer_type', 'cooperation')->first();

        return view("admin.footer.cooperation", compact("footer"));
    }

    public function update(Request $request)
    {
        # code...
        $footer = Footer::find($request->id);
        
        $footer->update([
            'contents' => $request->contents,
            'title' => $request->title,
        ]);

        if (!$footer) {
            return redirect()->back()->with(["error" => "Fail update"]);    
        }

        return redirect()->back()->with(["success" => "Update successfully"]);
    }
}
