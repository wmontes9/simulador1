<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";

    protected $fillable = ["id_evaluacion","puntos","descripcion"];
    
    public function evaluaciones(){
    	return $this->belongsTo("App\Evaluacion");
    }
    //public function calificaciiones(){
        //return $this->hasMany("App\Calificacion");
    //}

    //
}
