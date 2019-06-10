<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocimiento_Previo extends Model
{
    protected $table = "conocimiento_previo";

    protected $fillable = ["id_usuario","id_cuestionario","fecha","calificacion"];
    
    public function usuarios(){
    	return $this->belongsTo("App\Users");
    }
    public function cuestionarios(){
    	return $this->belongsTo("App\Cuestionario");
    }
    //
}
