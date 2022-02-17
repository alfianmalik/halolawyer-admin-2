<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('footer')->insert([
            [
                "footer_type" => "aboutus",
                "contents" => "",
            ],
            [
                "footer_type" => "contactus",
                "contents" => "",
            ],
            [
                "footer_type" => "useragreement",
                "contents" => "",
            ],
            [
                "footer_type" => "privacypolicy",
                "contents" => "",
            ],
            [
                "footer_type" => "cookiespolicy",
                "contents" => "",
            ],
            [
                "footer_type" => "copyrightpolicy",
                "contents" => "",
            ],
            [
                "footer_type" => "brandpolicy",
                "contents" => "",
            ]
        ]);
    }
}
