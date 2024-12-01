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
        Schema::table('tbl_vis_pass', function (Blueprint $table) {
            $table->dropForeign(['vis_id']); // Drop the foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vis_pass', function (Blueprint $table) {
            $table->foreign('vis_id')->references('id')->on('tbl_visitor')->onDelete('cascade');
        });
    }
};
