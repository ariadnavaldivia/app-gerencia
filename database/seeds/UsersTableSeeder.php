<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Admin
        User::create([
        	'name' => 'Ariadna Valdivia',
        	'email' => 'ariadna@gmail.com',
        	'password' => bcrypt('kathy'),
        	'role' => 0
        ]);

        // Client
        User::create([
        	'name' => 'Antonio Jiménez',
        	'email' => 'antonio@gmail.com',
        	'password' => bcrypt('jairo'),
        	'role' => 2
        ]);
    }
}
