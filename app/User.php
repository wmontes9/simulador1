<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'id_tipo_documento','name','apellido','documento','password','estado','telefono','email',"api_token",
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function tipo_documento(){
            return $this->belongsTo("App\Tipo_Documento");
    }

    public function user_type(){
        return $this->hasMany("App\UserType","id_user");
    }
    public function detalle_ficha(){
        return $this->hasMany("App\Detalle_Ficha","id_user");
    }
    public function calificacion(){
        return $this->hasMany("App\Calificacion","id_user");
    }
}
