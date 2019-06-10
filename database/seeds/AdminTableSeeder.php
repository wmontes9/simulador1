<?php

use Illuminate\Database\Seeder;
use App\User_Type;
use App\Rol;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	"name" => "wilson",
        	"apellido" => "Montes",
        	"documento" => "1050170289",
        	"email" => "wmontes917@gmail.com",
        	"password" => bcrypt("123456")
        ]);
        $id_user = $admin["id"];

        $type_user = User_Type::create([
        	"id_user" => $id_user,
        	"id_rol" => "1"
        ]);
    }
}
