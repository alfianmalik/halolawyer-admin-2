<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProvinceSeeder::class,
        	CitySeeder::class,
        	UsersTableSeeder::class,
            AdminTableSeeder::class,
            CaseCategoryTableSeeder::class,
            CategoryEJournalTableSeeder::class,
        	LawyersTableSeeder::class,
        	PembuatanDokumenTableSeeder::class,
        	RolesTableSeeder::class,
            ServicesDatabaseSeeder::class,
            SpecializationTableSeeder::class,
            FooterTableSeeder::class,
            
        ]);
    }
}
