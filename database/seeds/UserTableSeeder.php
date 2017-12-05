<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
   
    
    public function run()
    {
        DB::table('users')->delete();

        User::truncate();

        User::create([
            'username' => 'cristiano',
            'email' => 'cristiano@library.com',
            'password' => '1234'
        ]);

        User::create([
            'username' => 'michael',
            'email' => 'michael@library.com',
            'password' => '1234'
        ]);

        User::create([
            'username' => 'rachel',
            'email' => 'rachel@library.com',
            'password' => '1234'
        ]);

    }
}
