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
        	'name' => 'Nombre de usuario',
        	'email' => 'correo@gmail.com',
        	'user' => 'littlecory3',
        	'password' => Hash::make('Autonoma20+')
        ]);
    }
}
