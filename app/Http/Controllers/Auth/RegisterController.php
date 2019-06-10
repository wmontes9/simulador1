<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\User_Type;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "name" => 'required|string|max:255',
            "apellido"=> 'required|string|max:255',
            "documento"=> 'required|string',
            "password" => 'required|string',
            "estado"=> 'string',
            "telefono" => 'required|string|max:10',
            "email" => 'required|string|email|max:255|unique:users'
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       $admin = User::create([
            "name" =>$data['name'],
            "id_tipo_documento" => $data["type_document"],
            "apellido" =>$data['apellido'],
            "documento" =>$data['documento'],
            "password" =>bcrypt($data['password']),
            "telefono" =>$data['telefono'],
            "email" =>$data['email']
        ]);
        $id_user = $admin["id"];

        $type_user = User_Type::create([
            "id_user" => $id_user,
            "id_rol" => "3"
        ]);
        return $admin;

    }

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);
        $rol = User_Type::where("id_user","=",Auth::User()->id)->select("*")->get()->toArray();
        $rol = $rol[0]["id_rol"];
        Session::put("rol_user",$rol);
        return $rol;
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return "1";
    }

}

 