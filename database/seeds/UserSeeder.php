<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        	'name' => 'littlecory3',
        	'email' => 'littlecory99@gmail.com',
        	'user' => 'littlecory3',
        	'password' => Hash::make('12345678')
        ]);
    }
}
