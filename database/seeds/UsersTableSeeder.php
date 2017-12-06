<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'name' => 'Arian',
        		'surname' => 'Ajdari',
        		'email' => 'arianajdari23@gmail.com',
        		'password' => bcrypt('arian'),
                'role' => 2
        	],
        	[
        		'name' => 'Taha',
        		'surname' => 'Turk',
        		'email' => 'tahaturk25@hotmail.com',
        		'password' => bcrypt('taha'),
                'role' => 2
        	],
        ]);
    }
}
