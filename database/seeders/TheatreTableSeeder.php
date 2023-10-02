<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TheatreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theatres')->insert([
            [
                'theatre_name'=>'Lakshmi cinemas 4k',
                'location'=>'Kodungallur',
            ],
            [
                'theatre_name'=>'Sreekaleeswary Cinemas',
                'location'=>'Kodungallur',
            ],
            [
                'theatre_name'=>'Aashirvad Cineplexx',
                'location'=>'Perumbavoor',
            ],
            [
                'theatre_name'=>'EVM Cinemas',
                'location'=>'Fort Kochi',
            ],
            [
                'theatre_name'=>'M Cinimas 4k',
                'location'=>'Varapuzha',
            ],
            [
                'theatre_name'=>'PVR Lulu',
                'location'=>'Kochi',
            ],
            [
                'theatre_name'=>'PVR Oberon Mall',
                'location'=>'Kochi',
            ],
        ]);
    }
}
