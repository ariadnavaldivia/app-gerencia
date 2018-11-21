<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
        	'name' => 'Proyecto desarrollo de software',
        	'description' => 'El proyecto consiste en desarrollar un sitio web moderno.'
        ]);

        Project::create([
        	'name' => 'Proyecto desarrollo de aplicacion movil',
        	'description' => 'El proyecto consiste en desarrollar una aplicación Android.'
        ]);
    }
}
