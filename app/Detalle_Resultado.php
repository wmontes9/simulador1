<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Resultado extends Model
{
    protected $table = "detalle_resultado";
    protected $fillable = ["id_caso","id_resultado","id_tipo_resultado"];
    public function caso(){
    	return $this->belongsTo("App\Caso");
    }
    public function Resultado(){
    	return $this->belongsTo("App\Resultado");
    }
    public function tiporesultado(){
    	return $this->belongsTo("App\tiporesultado");
    }
    //
}
