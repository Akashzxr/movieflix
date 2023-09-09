<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run():void{
        $this->call(UserTableSeeder::class);
        \App\Models\User::factory(10)->create();
        \App\Models\Movie::factory(10)->create();
        \App\Models\Review::factory(5)->create();
        \App\Models\Genre::factory(7)->create();
     }
}
