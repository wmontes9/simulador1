<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";

    protected $fillable = ["nombre"];


    public function user_type(){
    	return $this->hasMany("App\UserType");
    }
}
