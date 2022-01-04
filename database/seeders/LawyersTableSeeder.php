<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
Use App\Models\CaseCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;
use App\Models\Province;

class LawyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::statement("SET foreign_key_checks=0");
    	// DB::table('users')->truncate();
    	// DB::table('lawyers')->truncate();
    	// DB::table('educations')->truncate();
    	// DB::table('lawyers_category')->truncate();
    	// DB::statement("SET foreign_key_checks=1");

    	for ($i=0; $i < 40; $i++) {
            $faker = Factory::create();
    		$lawyer = DB::table('lawyers')->insertGetId([
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'email' => 'lawyer'. $i .'@material.com',
	            'uuid' => Str::uuid(),
	            'slug' => Str::slug($faker->name),
	            'profile_picture' => "https://i.pravatar.cc/300",
	            'bod' => Carbon::now(),
	            'phone' => '08676767676',
	            'email_verified_at' => now(),
	            'password' => Hash::make('secret'),
                'slug' => Str::slug('Test-'.$i),
	            'location' => 'jakarta',
	            'expertise_specialization' => 'Hak Intelektual, Ketenagakerjaan, Bisnis & Usaha, Bisnis Start Up',
	            'consultation' => 'Bambang Widjojanto adalah seorang pengacara yang berpengalaman dalan mengurus kasus hak intelektual, ketenagakerjaan, bisnis & usaha dan bisnis start up. Bambang Widjojanto juga pernah memimpin Yayasan Lembaga Bantuan Hukum Indonesia dan merupakan pendiri Kontras (Komisi untuk Orang Hilang dan Korban Tindak Kekerasan) bersama almarhum Munir. Bambang Widjojanto juga aktif dalam membela korupsi di Indonesia, beliau pernah menjabat sebagai Wakil Ketua KPK periode 2011 – 2015. Bambang Widjojanto juga pernah eraih penghargaan dari Kennedy Human Rights Award.',
	            'lawyers_since' => $faker->date,
	            'created_at' => now(),
	            'updated_at' => now()
	        ]);

	        DB::table('lawyers_formal_educations')->insert([
	        	'lawyers_id' => $lawyer,
	            'education_university_department' => "Hukum",
	            'education_university' => 'Universitas Jayabaya 1984',
	            'education_level_education' => "S1"
	        ]);

            DB::table('lawyers_unformal_educations')->insert([
                'lawyers_id' => $lawyer,
                'education_type' => "Hukum",
                'education_title' => 'Sarjana Hukum',
                'education_year' => "2009",
                'certificate' => ""
            ]);

            DB::table('lawyers_specialization')->insert([
                'lawyers_id' => $lawyer,
                'case_category_id' => 1,
                'specialization_id' => 2,
            ]);

	        $random1 = CaseCategory::inRandomOrder()->first();
	        $random2 = CaseCategory::inRandomOrder()->first();

	        DB::table('lawyers_category')->insert(
	        	[
	        		[
			        	'lawyers_id' => $lawyer,
			        	'case_category_id' => $random1->id,
			        	'name' => $random1->name,
			        	'created_at' => now(),
			        ],
			        [
			        	'lawyers_id' => $lawyer,
			        	'case_category_id' => $random2->id,
			        	'name' => $random2->name,
			        	'created_at' => now(),
			        ]
			    ]
            );

            $dt = Carbon::now();

            for ($j=0;$j<10;$j++) {
                $arr = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
                $keys = array_rand($arr);
                DB::table('lawyers_schedule')->insert(
                    [
                        [
                            'lawyers_id' => $lawyer,
                            'service_details_id' => rand(1,4),
                            'day' => $arr[$keys],
                            'hour' => $dt->toTimeString(),
                        ],
                    ]
                );
            }

            DB::table('ejournal')->insert(
                [
                    [
                        'lawyers_id' => $lawyer,
                        'category_id' => 1,
                        'mitra_name' => 'Mitra',
                        'writer' => "Mitra writer",
                        'title_file' => "Serangan fajar",
                        "type_file" => "pdf",
                        "year_published" => "2009",
                        'status' => true,
                        "link" => "www.google.com"
                    ],
                ]
            );

            for ($o=1;$o<10;$o++) {
                $province = Province::inRandomOrder()->first();
                DB::table('lawyers_work_area')->insert(
                    [
                        [
                            'lawyers_id' => $lawyer,
                            'province' => $province->id,
                            'city' => $province->cities->random(1)->first()->id
                        ],
                    ]
                );
            }

	    }
    }
}
