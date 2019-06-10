<?php

use Illuminate\Database\Seeder;
use App\Tipo_Documento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documentos = [
        	["nombre_documento"=>"Cédula de ciudadania"],
        	["nombre_documento"=>"Tarjeta de identidad"],
        ];
        foreach($documentos as $documento){
        	Tipo_Documento::create($documento);
        }
    }
}
