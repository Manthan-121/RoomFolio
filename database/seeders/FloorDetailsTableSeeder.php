<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FloorDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_floor_details')->insert([
            [
                'ap_id' => 1, // assuming this apartment ID exists
                'floor_ownor' => 'Jane Doe',
                'floor_ownor_img' => 'jane_doe.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
