<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_categories')->insert([
            [
                'cat_name' => 'Regular',
                'cat_description' => 'Regular visitor pass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_name' => 'VIP',
                'cat_description' => 'VIP visitor pass',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
