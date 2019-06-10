<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = "pregunta";
    protected $fillable = ["id_cuestionario","descripcion"];
    public function cuestionario(){
    	return $this->belongsTo("App\Cuestinario");
    }
    public function Respuesta(){
        return $this->hasMany("App\Respuesta");
    } 
    //
}
