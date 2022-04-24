<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\CaseCategory;
use App\Models\Specialization;

class SpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hub = ['Hukum Perkawinan', 'Hukum Waris', 'Hukum Perwalian', 'Hukum Pengampunan', 'Hukum Kekuasaan Orang Tua'];
        $kawin = ['Hukum Perkawinan','Hukum Waris','Hukum Perwalian'];
        $kerja = ['Rekrutmen Tenaga Kerja','Perjanjian Kerja', 'Alih Daya (Outsourcing)', 'Tenaga Kerja Asing', 'Pemutusan Hubungan Kerja', 'Pemecatan ASN', 'Sengketa Perburuhan', 'Serikat Kerja'];
        $prop = ['Hunian Apartemen', 'Pengurusan Legalitas', 'Sengketa Tanah, Rumah, Apartemen, Perumahan', 'Kompleks Perumahan', 'Rumah & Toko', 'Kios', 'Rumah Dinas','Sengketa Pemilik dan Penyewa Apartemen & Perumahan'];
        $pida = ['Sengketa Informasi Publik', 'Pelayanan Publik', 'Kebijakan Pejabat Negara', 'Lingkungan Hidup', 'Konsumen', 'Penipuan & Penggelapan', 'Pencurian', 'Pembunuhan & Penganiayaan',
                 'Pencemaran Nama Baik', 'Korupsi', 'Pelanggaran HAM', 'Pencucian Uang', 'Pidana Lintas Negara', 'ITE', 'Cyber Crime', 'Hunian Apartemen','Pengurusan Legalitas', 'Sengketa Tanah, Rumah, Apartemen, Perumahan',
                 'Kompleks Perumahan','Rumah & Toko', 'Kios', 'Rumah Dinas', 'Sengketa Pemilik dan Penyewa Apartemen & Perumahan', 'Hukum Perkawinan', 'Hukum Waris', 'Hukum Perwalian', 'Hukum Pengampunan',
                 'Hukum Kekuasaan Orang Tua', 'Merek', 'Paten', 'Hak Cipta', 'Jasa Kreatif', "Bisnis Start Up", 'Bisnis Teknologi', 'Bisnis Online', 'Kontrak Kerja Sama dengan Vendor', 'Perizinan terkait Pembukaan Usaha',
                 'Pasar Modal', 'Investasi, Joint Venture, Merger', 'Perbankan, Jasa & Keuangan', 'Asuransi', 'Hukum Maritim & Perkapalan', 'Persaingan Usaha', 'Kepailitan', 'Kartu Kredit',  'KPR',
                 'Kredit Usaha', 'Jual Beli', 'Wanprestasi',
                 'Debt Collector', 'Rekrutmen Tenaga Kerja', 'Perjanjian Kerja', 'Alih Daya (Outsourcing)', 'Tenaga Kerja Asing', 'Pemutusan Hubungan Kerja', 'Pemecatan ASN', 'Sengketa Perburuhan', 'Serikat Kerja '];
        $hak = ['Merek', 'Paten', 'Hak Cipta', 'Jasa Kreatif'];
        $start = ['Bisnis Start Up','Bisnis Teknologi', 'Bisnis Online', 'Kontrak Kerja Sama dengan Vendor', 'Perizinan terkait Pembukaan Usaha', 'Pasar Modal', 'Investasi, Joint Venture, Merger', 'Perbankan, Jasa & Keuangan', 'Asuransi', 'Hukum Maritim & Perkapalan', 'Persaingan Usaha'];
        $bisnis = ["Bisnis Teknologi",'Bisnis Online', "Kontrak Kerja Sama dengan Vendor", 'Perizinan terkait Pembukaan Usaha', "Pasar Modal", 'Investasi, Joint Venture, Merger', "Perbankan, Jasa & Keuangan", 'Asuransi', 'Hukum Maritim & Perkapalan', 'Persaingan Usaha'];
        $hutang = ["Kepailitan", 'Kartu Kredit', 'KPR', "Kredit Usaha", 'Jual Beli', "Wanprestasi", 'Debt Collector'];

        $data = [
            1 => $hub,
            2 => $kawin,
            3 => $kerja,
            4 => $prop,
            5 => $pida,
            6 => $hak,
            7 => $start,
            8 => $bisnis,
            9 => $hutang
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table("specialization")->truncate();
        DB::table("category_specialization")->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // $case_category = CaseCategory::all();
        // foreach ($case_category as $key => $value) {
        //     $data_specialization = $data[$value->id];
        //     foreach ($data_specialization as $key => $value) {
        //         $specialization = Specialization::create([
        //             'name' => $value
        //         ]);
        //         $value = $specialization->id;
        //         $value = [
        //             'category_id' => $value,
        //             'specialization_id' => $value
        //         ];
        //         DB::table('category_specialization')->insert($value);
        //     }
        // }
        for ($i=1;$i<=count($data);$i++)
        {
            for ($j=0; $j<count($data[$i]);$j++)
            {
                $external_id = !DB::table("specialization")->where('name', '=', $data[$i][$j])->first()?unique_code(6):DB::table("specialization")->where('name', '=', $data[$i][$j])->first()->external_id;
                $id = DB::table('specialization')->insertGetId([
                    'case_category_id' => $i,
                    'name' => $data[$i][$j],
                    'external_id' => $external_id
                ]);
                DB::table('category_specialization')->insert([
                    'case_category_id' => $i,
                    'specialization_id' => $id
                ]);
                // $specialization = new Specialization();
                // $specialization->saveMany([
                //     [
                //         'case_category_id' => $i,
                //         'name' => $data[$i][$j]
                //     ]
                // ]);
            }
        }
    }
}
