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
        Schema::create('tbl_floor_details', function (Blueprint $table) {
            $table->id('floor_id');
            $table->unsignedBigInteger('ap_id'); // Explicitly defining column type
            $table->string('floor_ownor');
            $table->string('floor_ownor_img')->nullable();
            $table->timestamps(); // Creates ap_created and ap_updated

            // Foreign key constraint
            $table->foreign('ap_id')->references('ap_id')->on('tbl_apartment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_floor_details');
    }
};
