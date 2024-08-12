<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tbl_floor_details', function (Blueprint $table) {
            $table->integer('floor_no')->after('ap_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_floor_details', function (Blueprint $table) {
            $table->dropColumn('floor_no');
        });
    }
};
