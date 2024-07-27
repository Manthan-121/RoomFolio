<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_apartment')->insert([
            [
                'ap_name' => 'Sunset Apartments',
                'ap_remark' => 'A beautiful apartment complex',
                'ap_tot_floor' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ap_name' => 'Ocean View Apartments',
                'ap_remark' => 'Luxury living with an ocean view',
                'ap_tot_floor' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
