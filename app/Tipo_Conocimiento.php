<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Conocimiento extends Model
{
    protected $table = "tipo_conocimiento";

    protected $fillable = ["nombre_tipo"];

    public function conocimientos(){
        return $this->hasMany("App\Conocimiento");
    }
}
