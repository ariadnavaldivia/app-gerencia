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
        	'name' => 'Katheryn Quiroz Carrillo',
        	'email' => 'kathy_sistemas@gmail.com',
        	'password' => bcrypt('kathy'),
        	'role' => 0
        ]);

        // Client
        User::create([
        	'name' => 'Jairo Gil Tesen',
        	'email' => 'jairo@gmail.com',
        	'password' => bcrypt('jairo'),
        	'role' => 2
        ]);
    }
}
