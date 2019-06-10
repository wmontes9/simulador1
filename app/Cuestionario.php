<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $table = "cuestionario";

    protected $fillable = ["titulo","descripcion"];
    
    public function pregunta(){
        return $this->hasMany("App\Pregunta");
    }
    public function detalle_cuestionario(){
        return $this->hasMany("App\Detalle_Cuestionario");
    }
    public function conocimiento_previo(){
        return $this->hasMany("App\Conocimiento_Previo");
    }
    //
}
