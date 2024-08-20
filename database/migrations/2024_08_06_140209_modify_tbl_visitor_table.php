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
            $table->date('vis_entry_date')->nullable();
            $table->time('vis_entry_time')->nullable();
            $table->date('vis_exit_date')->nullable();
            $table->time('vis_exit_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_visitor', function (Blueprint $table) {
            $table->dropColumn(['vis_entry_date', 'vis_entry_time', 'vis_exit_date', 'vis_exit_time']);
        });
    }
};
