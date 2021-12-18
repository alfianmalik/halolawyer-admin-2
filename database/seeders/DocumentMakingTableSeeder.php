<?php

use Illuminate\Database\Seeder;

class DocumentMakingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=1; $i < 7; $i++) { 
	        DB::table('document_making')->insert([
	            'title' => 'Kontrak Kerjasama',
	            'making_by' => 'Dibuat langsung oleh Advokat 8+ tahun penghalaman.',
	            'needed' => 'Disesuaikan dengan kebutuhan spesifik Anda.',
	            'price' => 100000,
	            'discount' => 3000000,
	            'finished' => '18',
	            'created_at' => now(),
	            'updated_at' => now()
	        ]);
	    }
    }
}
