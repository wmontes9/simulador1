<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $table = "resultado";
    protected $fillable = ["id_competencia","codigo","descripcion"];

    public function competencia(){
    	return $this->belongsTo("App\Competencia");
    }
    public function detalle_Resultado(){
        return $this->hasMany("App\Detalle_Resultado");
    }
    public function Actividad(){
        return $this->hasMany("App\Actividad");
    }
    //
}
