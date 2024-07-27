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
        Schema::create('tbl_visitor', function (Blueprint $table) {
            $table->id('vis_id'); // Define the primary key
            $table->string('vis_name');
            $table->string('vis_mobile', 20);
            $table->string('vis_email')->nullable();
            $table->unsignedBigInteger('ap_id'); // Define the foreign key column type explicitly
            $table->integer('floor_id');
            $table->string('vis_whom_to_meet');
            $table->string('vis_reason')->nullable();
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
        Schema::dropIfExists('tbl_visitor');
    }
};
