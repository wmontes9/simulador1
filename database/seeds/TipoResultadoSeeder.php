<?php

use Illuminate\Database\Seeder;
use App\tiporesultado;
class TipoResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultados = [
        	["tipo_resultado"=>"Primario"],
        	["tipo_resultado"=>"Secundario"],
        ];
        foreach($resultados as $resultado){
        	tiporesultado::create($resultado);
        }
    }
}
