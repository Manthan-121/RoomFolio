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
        Schema::create('tbl_vis_pass_entry', function (Blueprint $table) {
            $table->id('vpe_id');
            $table->unsignedBigInteger('pass_id');
            $table->date('vpe_entry_date');
            $table->time('vpe_entry_time');
            $table->date('vpe_exit_date')->nullable();
            $table->time('vpe_exit_time')->nullable();
            $table->timestamps();

            $table->foreign('pass_id')->references('pass_id')->on('tbl_vis_pass')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vis_pass_entry');
    }
};
