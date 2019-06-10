<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Documento extends Model
{
    protected $table = "tipo_documento";
    protected $fillable = ["nombre"];

    public function User(){
        return $this->hasMany("App\User");
    }
 
}