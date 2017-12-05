<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
   
    
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'username' => 'cristiano',
            'email' => 'cristiano@library.com',
            'password' => '1234'
        ]);


    }
}
