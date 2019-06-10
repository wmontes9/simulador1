<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opcion extends Model
{
    protected $table = "opcion";
    protected $fillable = ["id_competencia","descripcion"];
    
    public function actividad(){
    	return $this->belongsTo("App\Actividad");
    }
    //
}
