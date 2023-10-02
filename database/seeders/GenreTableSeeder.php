<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('genres')->insert([
               
                [
                    'genre_name'=>'Action',
                ],
               
                [
                    'genre_name'=>'Horror',
                ],

                [
                    'genre_name'=>'Thriller',
                ],

                [
                    'genre_name'=>'Romance',
                ],

                [
                    'genre_name'=>'Drama',
                ],

                [
                    'genre_name'=>'Fantasy',
                ],
               
            ]);
    }
}
