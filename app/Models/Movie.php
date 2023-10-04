<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';
    protected $fillable = [
        'movie_name',
        'genres',
        'director',
        'producers',
        'writters',
        'actors',
        'description',
        'movie_image',
        'trailer_link',
        'rating',
        'release_date',
        'runtime',
        'theatres',
        'showtimes',
        'ott_platform',
        'ott_link',
        'imdb_id',
        'movie_link',
    ];
}
