<?php

use Illuminate\Database\Seeder;
use App\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
        	'name' => 'Instagram',
        	'link' => 'https://www.instagram.com/',
        	'status' => 'on'
        ]);

        Footer::create([
        	'name' => 'Twitter',
        	'link' => 'https://www.twitter.com/',
        	'status' => 'on'
        ]);

        Footer::create([
        	'name' => 'Tik Tok',
        	'link' => 'https://www.tiktok.com/',
        	'status' => 'on'
        ]);

        Footer::create([
        	'name' => 'Amazon',
        	'link' => 'https://www.amazon.com/',
        	'status' => 'on'
        ]);

        Footer::create([
        	'name' => 'Email',
        	'link' => 'usuario@dominio.co',
        	'status' => 'on'
        ]);
    }
}
