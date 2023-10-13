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
            $table->longText('trailer_link');
            $table->float('rating');
            $table->string('release_date');
            $table->string('runtime');
            $table->string('theatres')->nullable();
            $table->string('ott_platform')->nullable();
            $table->longText('ott_link')->nullable();
            $table->string('imdb_id')->nullable();
            $table->string('movie_link')->nullable();
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
