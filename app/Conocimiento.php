<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    protected $table = "conocimiento";

    protected $fillable = ["id_competencia","id_tipoconocimiento","descripcion"];
    
    public function competencias(){
    	return $this->belongsTo("App\Competencia");
    }
    public function tipo_conocimientos(){
    	return $this->belongsTo("App\Tipo_Conocimiento");
    }
    //
}
