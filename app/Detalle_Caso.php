<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Caso extends Model
{
    protected $table = "detalle_caso";
    protected $fillable = ["id_caso","proposito","audiencia","enfoque","metodo","fecha_elaboracion","estado","tiempo_promedio"];
    public function casos(){
    	return $this->belongsTo("App\Caso");
    }
    //
}
