<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluacion";

    protected $fillable = ["id_actividad","nombre","descripcion"];
    
    public function actividades(){
    	return $this->belongsTo("App\Actividad");
    }
    public function item(){
        return $this->hasMany("App\Item");
    }
    //
}
