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
        Schema::table('tbl_visitor', function (Blueprint $table) {
            $table->unsignedBigInteger('ap_id')->change();
            $table->unsignedBigInteger('floor_id')->change();
            $table->date('vis_entry_date')->nullable();
            $table->time('vis_entry_time')->nullable();
            $table->date('vis_exit_date')->nullable();
            $table->time('vis_exit_time')->nullable();

            $table->foreign('ap_id')->references('ap_id')->on('tbl_apartment')->onDelete('cascade');
            $table->foreign('floor_id')->references('floor_id')->on('tbl_floor_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_visitor', function (Blueprint $table) {
            $table->dropForeign(['ap_id']);
            $table->dropForeign(['floor_id']);
            $table->dropColumn(['vis_entry_date', 'vis_entry_time', 'vis_exit_date', 'vis_exit_time']);
        });
    }
};
