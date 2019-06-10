<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiporesultado extends Model
{
    protected $table = "tiporesultado";

    protected $fillable = ["nombre_resultado"];
    
    public function users(){
    	return $this->hasMany("App\Detalle_Resultado");
    }
}
