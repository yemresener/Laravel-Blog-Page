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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('home_image')->nullable();
            $table->string('main_image')->nullable();
            $table->string('low1_image')->nullable();
            $table->string('low2_image')->nullable();
            $table->string('low3_image')->nullable();
            $table->string('low4_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post', function (Blueprint $table) {
            //
        });
    }
};
