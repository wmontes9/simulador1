<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo_Actividad extends Model
{
    protected $table = "anexo_actividad";

    protected $fillable = ["id_actividad","url_anexo"];
    
    public function actividad(){
    	return $this->belongsTo("App\Actividad");
    }
    //
}
