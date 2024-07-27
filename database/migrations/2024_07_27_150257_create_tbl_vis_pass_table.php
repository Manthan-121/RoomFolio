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
        Schema::create('tbl_vis_pass', function (Blueprint $table) {
            $table->id('pass_id'); // Define the primary key
            $table->unsignedBigInteger('cat_id'); // Define the foreign key column type explicitly
            $table->unsignedBigInteger('vis_id'); // Define the foreign key column type explicitly
            $table->string('pass_img')->nullable();
            $table->date('pass_start_date');
            $table->date('pass_end_date');
            $table->text('pass_description')->nullable();
            $table->timestamps(); // Creates ap_created and ap_updated

            // Foreign key constraints
            $table->foreign('cat_id')->references('cat_id')->on('tbl_categories')->onDelete('cascade');
            $table->foreign('vis_id')->references('vis_id')->on('tbl_visitor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vis_pass');
    }
};
