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
            $table->string('pass_name')->nullable();
            $table->string('pass_address')->nullable();
            $table->string('pass_mobile')->nullable();
            $table->string('pass_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_vis_pass', function (Blueprint $table) {
            $table->dropColumn(['pass_name', 'pass_address', 'pass_mobile', 'pass_email']);
        });
    }
};
