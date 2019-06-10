<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table = "caso";

    protected $fillable = ["titulo","descripcion","url_imagen","url_video"];
    
    public function detalle_caso(){
        return $this->hasMany("App\Detalle_Caso");
    }
    public function objetivos(){
        return $this->hasMany("App\Objetivo");
    }
    //
}
