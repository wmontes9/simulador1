<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = "respuesta";
    protected $fillable = ["id_pregunta","descripcion","validacion"];
    
    public function pregunta(){
    	return $this->belongsTo("App\Pregunta");
    }
    //
}
