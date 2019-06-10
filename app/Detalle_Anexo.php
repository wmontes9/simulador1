<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Anexo extends Model
{
    protected $table = "detalle_anexo";

    protected $fillable = ["id_competencia","url_grupo"];
    
    public function competencias(){
    	return $this->belongsTo("App\Competencia");
    }
    public function anexo(){
        return $this->hasMany("App\Anexo");
    }
    //
}
