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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('main_title');
            $table->string('main_article');

            $table->string('low_title1')->nullable();
            $table->string('low_article1')->nullable();
            $table->string('low_title2')->nullable();
            $table->string('low_article2')->nullable();
            $table->string('low_title3')->nullable();
            $table->string('low_article3')->nullable();
            $table->string('low_title4')->nullable();
            $table->string('low_article4')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
