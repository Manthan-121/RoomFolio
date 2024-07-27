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
        Schema::create('tbl_apartment', function (Blueprint $table) {
            $table->id('ap_id');
            $table->string('ap_name');
            $table->text('ap_remark')->nullable();
            $table->integer('ap_tot_floor');
            $table->timestamps(); // Creates ap_created and ap_updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_apartment');
    }
};
