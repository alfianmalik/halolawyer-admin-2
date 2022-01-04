<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case_category')->insert([
            [
        	'name' => 'hubungan keluarga',
        	'created_at' => now()
        ], [
        	'name' => 'perkawinan',
        	'created_at' => now()
        ], [
        	'name' => 'ketenagakerjaan',
        	'created_at' => now()
        ], [
        	'name' => 'properti & perumahan',
        	'created_at' => now()
        ], [
        	'name' => 'pidana & kepolisian',
        	'created_at' => now()
        ], [
        	'name' => 'hak intelektual',
        	'created_at' => now()
        ], [
        	'name' => 'bisnis start up',
        	'created_at' => now()
        ], [
        	'name' => 'bisnis & usaha',
        	'created_at' => now()
        ], [
        	'name' => 'hutang piutang',
        	'created_at' => now()
        ]
    ]);
    }
}
