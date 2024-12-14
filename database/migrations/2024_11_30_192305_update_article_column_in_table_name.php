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
            $table->string('main_article', 1000)->change();
            $table->string('low_article1', 1000)->nullable()->change();
            $table->string('low_article2', 1000)->nullable()->change();
            $table->string('low_article3', 1000)->nullable()->change();
            $table->string('low_article4', 1000)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_name', function (Blueprint $table) {
            //
        });
    }
};
