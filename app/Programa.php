<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programa";

    protected $fillable = ["nombre","codigo","nivel_formacion","estado","version"];
    
    public function competencia(){
        return $this->hasMany("App\Competencia");
    }
    public function fichas(){
        return $this->hasMany("App\Ficha");
    }
    //
}
