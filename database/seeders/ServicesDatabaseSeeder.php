<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$k1 = [ "service_name" => "Konsultasi Telepon",
                "details" => [
                    ["price" => "300000", 'time' => '30', 'tax' => 0, 'discount' => 0],
                    ["price" => "600000", 'time' => '60', 'tax' => 0, 'discount' => 0]
                 ]
              ];
    	$k2 = [ "service_name" => "Konsultasi Tatap Muka",
                "details" => [
                    ["price" => "300000", 'time' => '30', 'tax' => 0, 'discount' => 0],
                    ["price" => "600000", 'time' => '60', 'tax' => 0, 'discount' => 0]
                 ]
             ];
    	$k3 = [ "service_name" => "Pendampingan Hukum",
                "details" => [
                    ["price" => "300000", 'time' => '', 'tax' => 0, 'discount' => 0]
                 ]
             ];
    	$k4 = [ "service_name" => "Pembuatan Dokumen",
                "details" => [
                    ["price" => "300000", 'time' => '', 'tax' => 0, 'discount' => 0]
                 ]
             ];

        $k5 = [ "service_name" => "Konsultasi Chat",
             "details" => [
                 ["price" => "30000", 'time' => '', 'tax' => 0, 'discount' => 30000]
              ]
          ];

        $array = [$k1,$k2,$k3,$k4, $k5];

        for ($i=0; $i < count($array); $i++) {
        	$serviceId = DB::table('service')->insertGetId([
	            'service_name' => $array[$i]['service_name'],
                'created_at' => now(),
	        ]);

            for ($j=0; $j < count($array[$i]['details']); $j++) {
                $lastId = DB::table('service_details')->insertGetId([
                    'service_id' => $serviceId,
                    'price' => $array[$i]['details'][$j]['price'],
                    'time' => $array[$i]['details'][$j]['time'],
                    'management_fee' => 0,
                    'discount' => $array[$i]['details'][$j]['discount'],
                    'tax' => $array[$i]['details'][$j]['tax'],
                    'created_at' => now(),
                ]);
            }
        }
    }
}
