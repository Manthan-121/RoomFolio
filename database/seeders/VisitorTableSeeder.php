<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_visitor')->insert([
            [
                'vis_name' => 'John Doe',
                'vis_mobile' => '0987654321',
                'vis_email' => 'john.doe@example.com',
                'ap_id' => 1, // assuming this apartment ID exists
                'floor_id' => 2,
                'vis_whom_to_meet' => 'Jane Smith',
                'vis_reason' => 'Meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
