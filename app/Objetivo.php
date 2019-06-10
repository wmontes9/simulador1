<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = "objetivo";
    protected $fillable = ["id_caso","descripcion"];
    
    public function casos(){
    	return $this->belongsTo("App\Caso");
    }
    //
}
