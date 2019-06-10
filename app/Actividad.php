<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = "actividad";

    protected $fillable = ["id_resultado","descripcion","estado"];
    
    public function resultados(){
    	return $this->belongsTo("App\Resultado");
    }
    public function anexo_actividad(){
        return $this->hasMany("App\Anexo_Actividad");
    }
    public function evidencia(){
        return $this->hasMany("App\Evidencia");
    }
    public function opcion(){
        return $this->hasMany("App\opcion");
    }
    //
}
