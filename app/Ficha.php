<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = "ficha";

    protected $fillable = ["id_usuario","id_programa","codigo","fecha_inicio","fecha_fin"];
    
    public function detalle_ficha(){
    	return $this->hasMany("App\Detalle_Ficha","id_ficha");
    }
    public function programas(){
    	return $this->belongsTo("App\Programa");
    }
    //
}
