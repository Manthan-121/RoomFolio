<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_admin')->insert([
            'ad_name' => 'Admin',
            'ad_email' => 'admin@roomfolio.com',
            'ad_mobile' => '1234567890',
            'ad_password' => Hash::make('admin@123'),
            'ad_dp_image' => 'default.png',
            'ad_address' => '123 Main Street',
            'ad_pwd_reset_tk' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
