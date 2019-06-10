<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    protected $table = "evidencia";

    protected $fillable = ["id_actividad","url_evidencia","descripcion"];
    
    public function actividades(){
    	return $this->belongsTo("App\Actividad");
    }
    //
}
