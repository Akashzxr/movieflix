<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class OttTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('otts')->insert([
            [
                'ott_name'=>'Netflix',
                'ott_logo'=>'images/netflix.png',
            ],
            [
                'ott_name'=>'AmazonPrime',
                'ott_logo'=>'images/amazonprime.png',
            ],
            [
                'ott_name'=>'Disney+Hotstar',
                'ott_logo'=>'images/disney.jpg',
            ],
            [
                'ott_name'=>'Jio Cinema',
                'ott_logo'=>'images/jiocinema.png',
            ],
        ]);
    }
}
