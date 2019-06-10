<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = "anexo";

    protected $fillable = ["id_detalle_anexo","nombre","url_anexo"];
    
    public function detalle_anexo(){
    	return $this->belongsTo("App\Detalle_anexo");
    }
    //
}
