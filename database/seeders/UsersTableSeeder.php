<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => ' admin',
            'email' => 'admin@material.com',
            'uuid' => Str::uuid(),
            'slug' => Str::slug('Admin Admin'),
            'profile_picture' => 'http://administrator.halolawyer.co.id/profile/avatar.png',
            'bod' => Carbon::now(),
            'phone' => '08676767676',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'User',
            'last_name' => ' user',
            'email' => 'user@material.com',
            'uuid' => Str::uuid(),
            'slug' => Str::slug('User User'),
            'profile_picture' => 'http://administrator.halolawyer.co.id/profile/avatar.png',
            'bod' => Carbon::now(),
            'phone' => '08676767676',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
