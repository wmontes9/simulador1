<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Cuestionario extends Model
{
    protected $table = "detalle_cuestionario";
    protected $fillable = ["id_cuestionario","id_competencia","fecha_cuestionario","estado","duracion"];
   
    public function cuestionario(){
    	return $this->belongsTo("App\Cuestionario");
    }
    public function competencia(){
    	return $this->belongsTo("App\Competencia");
    }
    //
}
