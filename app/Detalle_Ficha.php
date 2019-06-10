<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Ficha extends Model
{
    protected $table = "detalle_ficha";
    protected $fillable = ["id_ficha","id_user"];
   
    public function ficha(){
    	return $this->belongsTo("App\Ficha");
    }
    public function user(){
    	return $this->belongsTo("App\User");
    }
}
