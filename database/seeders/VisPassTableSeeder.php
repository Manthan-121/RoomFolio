<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VisPassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_vis_pass')->insert([
            [
                'cat_id' => 1, // assuming this category ID exists
                'vis_id' => 1, // assuming this visitor ID exists
                'pass_img' => 'pass_img.png',
                'pass_start_date' => '2024-01-01',
                'pass_end_date' => '2024-01-31',
                'pass_description' => 'Monthly pass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
