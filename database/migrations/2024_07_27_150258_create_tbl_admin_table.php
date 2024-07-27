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
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->id('ad_id');
            $table->string('ad_name');
            $table->string('ad_email')->unique();
            $table->string('ad_mobile', 20);
            $table->string('ad_password');
            $table->string('ad_dp_image')->nullable();
            $table->text('ad_address')->nullable();
            $table->string('ad_pwd_reset_tk')->nullable();
            $table->timestamps(); // Creates ad_created and ad_updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_admin');
    }
};
