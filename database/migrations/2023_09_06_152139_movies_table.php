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
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('movie_name');
            $table->string('genres');
            $table->string('director');
            $table->string('producers');
            $table->string('writters');
            $table->string('actors');
            $table->longText('description');
            $table->string('movie_image');
            $table->string('trailer_link');
            $table->integer('rating');
            $table->string('release_date');
            $table->string('runtime');
            $table->string('theatres')->nullable();
            $table->string('ott_platform')->nullable();
            $table->string('ott_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
