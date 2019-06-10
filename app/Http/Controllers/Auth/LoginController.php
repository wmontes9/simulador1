<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\User_Type;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function username()
    {
        return 'documento';
    }
    //se obtienen los datos del formulario de acceso
     protected function credentials(Request $request)
    {
        $credentials =  $request->only($this->username(), 'password');//campos por defecto
        $credentials['id_tipo_documento'] = $request["type_document"];//se iguala a otro attributo mas con lo cual el ORM arma la consulta y retorna una respuesta
        return $credentials;
    }


    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);
        $rol = User_Type::where("id_user","=",Auth::User()->id)->select("*")->get()->toArray();
        //dd($rol[0]["id_user"]);
        $idusuario = $rol[0]["id_user"];
        $rol = $rol[0]["id_rol"];
        Session::put("id_user".$idusuario);
        Session::put("rol_user",$rol);
        return $rol;
    }
    
}
