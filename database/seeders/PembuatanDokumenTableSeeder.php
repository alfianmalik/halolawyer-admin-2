<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembuatanDokumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$k1 = [
            'title' => 'Kontrak Kerjasama (Umum)',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam pembuatan Kontrak Kerjasama',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik Kontrak Kerjasama Anda',
            'price' => 10000000,
            'discount' => 3000000,
            'finished' => '16'
        ];

        $k2 = [
            'title' => 'Kontrak Vendor untuk Penyedia Jasa atau Barang ',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam pembuatan Kontrak Vendor untuk Penyedia Jasa atau Barang',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik Kontrak Vendor Anda',
            'price' => 10000000,
            'discount' => 3000000,
            'finished' => '16'
        ];

        $k3 = [
            'title' => 'Peraturan Perusahaan ',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam membuatan Peraturan Perusahaan',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik Peraturan Perusahaan yang Anda butuhkan ',
            'price' => 15000000,
            'discount' => 3000000,
            'finished' => '16'
        ];

        $k4 = [
            'title' => 'Ketentuan Layanan (<i>Term & Conditions</i>) ',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam membuat Ketentuan Layanan (Term & Conditions)',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik Ketentuan Layanan yang Anda butuhkan',
            'price' => 25000000,
            'discount' => 3000000,
            'finished' => '21'
        ];

        $k5 = [
            'title' => 'Opini Hukum (Legal Opinion) ',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam membuat dokumen Opini Hukum',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik Opini Hukum yang Anda butuhkan',
            'price' => 25000000,
            'discount' => 3000000,
            'finished' => '24'
        ];

        $k6 = [
            'title' => 'Review Dokumen Hukum (Umum) ',
            'modify' => 'Dibuat langsung oleh advokat berpengalaman dalam Mereview Dokumen Hukum',
            'needed' => 'Disesuaikan dengan kebutuhan spesifik yang Anda butuhkan ',
            'price' => 5000000,
            'discount' => 1000000,
            'finished' => '16'
        ];

        $array = [$k1,$k2,$k3,$k4,$k5,$k6];

        for ($i=0; $i < count($array); $i++) { 
        	DB::table('document_makings')->insert([
	            'title' => $array[$i]['title'],
	            'making_by' => $array[$i]['modify'],
	            'needed' => $array[$i]['needed'],
	            'price' => $array[$i]['price'],
	            'discount' => $array[$i]['discount'],
	            'finished' => $array[$i]['finished'],
	            'created_at' => now(),
	            'updated_at' => now()
	        ]);
        }
        
    }
}
