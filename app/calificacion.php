<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    protected $table = "calificacion";

    protected $fillable = ["id_actividad","id_item","id_user","fecha","calificacion","observaciones"];
    
    public function usuarios(){
    	return $this->belongsTo("App\User");
    }
    public function actividad(){
    	return $this->belongsTo("App\Actividad");
    }
    public function item(){
    	return $this->belongsTo("App\Item");
    }
}
