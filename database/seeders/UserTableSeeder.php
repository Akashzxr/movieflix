<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'username'=>'admin',
                'phone'=>'7',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'admin',
                'gender'=>"male"
            ],
            //User
            [
               
                'username'=>'user',
                'phone'=>'7',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'user',
                'gender'=>"male"
            ],
           
        ]);
    }
}
