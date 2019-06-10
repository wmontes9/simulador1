<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Type extends Model
{
    protected $table = "user_type";
    protected $fillable = ["id_user","id_rol"];

    public function roles(){
    	return $this->belongsTo("App\Rol");
    }

    public function users(){
    	return $this->belongsTo("App\User");
    }
}
