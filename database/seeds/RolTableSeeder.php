<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	["nombre"=>"administrador"],
        	["nombre"=>"instructor"],
        	["nombre"=>"aprendiz"]
        ];
        foreach($roles as $rol){
        	Rol::create($rol);
        }
    }
}
