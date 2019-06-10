<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table = "competencia";
    protected $fillable = ["id_programa","codigo","descripcion","url_videoc"];
    public function programas(){
    	return $this->belongsTo("App\Programa");
    }
    public function Resultados(){
        return $this->hasMany("App\Resultado");
    }
    public function Conocimiento(){
        return $this->hasMany("App\Conocimiento");
    }
    public function Detalle_anexo(){
        return $this->hasMany("App\Detalle_Anexo");
    }
    //
}
