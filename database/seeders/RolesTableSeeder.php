<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'Admin',
        	'created_at' => now()
        ], [
        	'name' => 'Pengacara',
        	'created_at' => now()
        ], [
        	'name' => 'User',
        	'created_at' => now()
        ]);
    }
}
