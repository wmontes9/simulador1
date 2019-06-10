<?php

use Illuminate\Database\Seeder;
use App\Tipo_Conocimiento;
class TipoConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conocimientos = [
        	["nombre_tipo"=>"Conocimiento de concepto"],
        	["nombre_tipo"=>"Conocimiento de proceso"],
        ];
        foreach($conocimientos as $conocimiento){
        	Tipo_Conocimiento::create($conocimiento);
        }
    }
}
