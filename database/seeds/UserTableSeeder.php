<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
       /*factory(App\User::class)->create([
			'nombres' => 'Eduard',
			'apellidos' => 'Ramos',
			'cedula' => '1017211783',
			'email' => 'xseduard@gmail.com',
			'role' => 'administrador'
       	]);*/

       factory(App\User::class, 9)->create();
    }
}
