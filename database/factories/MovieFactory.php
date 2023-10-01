<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_name'=> fake()->name(),
            'genres' => fake()->text(),
            'director' => fake()->unique()->safeEmail(),
            'producers' => fake()->text(),
            'writters' => fake()->text(),
            'actors' => fake()->text(),
            'description' => fake()->text(),
            'movie_image' =>fake()->text(),	
            'trailer_link' => fake()->text(),	
            'rating' => 5,
            'release_date' => fake()->text(),
            'runtime' => fake()->text(),
            'theatres' => fake()->text(),
            'ott_platform' => fake()->text(),
            'ott_link' => fake()->text(),
        ];
    }
}
