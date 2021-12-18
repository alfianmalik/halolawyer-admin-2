<?php

use Illuminate\Database\Seeder;

class CategoryEJournalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Bisnis', 'Denda', 'Hak Asuh Anak', 'Hak Waris', 'Hukum Perdata', 'Hukum Pidana', 'Hutang Piutang', 'Korupsi', 'Pernikahan', 'Properti', 'Umum'];

        for ($i=0;$i<count($array);$i++)
        {
            DB::table('category_ejournal')->insert([
                'name' => $array[$i],
                'description' => "",
                'status' => 1
            ]);
        }
    }
}
