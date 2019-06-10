<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use Mail;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    public function index(){
        return view("auth.passwords.reset");
    }

    public function verify_email(Request $request){
        //1.verificar si el usuario existe en los registro [aplicando dos pasos de seguridad documento y correo coincidan con el usuario actualmente solicitando]
        $user = User::where("email","=",$request->email)
        ->where("documento","=",$request->document)->select("*")->get()->toArray();
        //tomar de decicioner de acurdo a la respuesta
        if($user){//devuelve true en caso de el array devuelva objetos de lo contrario devuelve false y se va a else
            $str = str_random(255);//generar una cadena unica para armar ruta y asociar al usuario cuando ese acceda al enlace recibido en el email
            $data = array("str"=>$str);
            $id = $user[0]["id"];
            $data_user = User::find($id);
            $data_user->api_token = $str;
            $data_user->save();
            Mail::send("auth.passwords.email_reset", $data,function($ms) use($request){
                $ms->subject("Recuperacion de contraseña");
                $ms->to($request->email);
            });
            Session::flash("confirmation","Por favor acceda a su correo para continuar");
            return redirect()->back();
        }else{
            Session::flash("error","No se a encontrado ninguna coincidencia con nuestros registros");
            return redirect()->back();
        }
    }

    public function new_password($str){//se recive el str generado y con este accederemos al usuairo pereteneciente a este para actualizar sus datos
        if($str !="" ){
            Session::put("str",$str);
            return view("auth.passwords.update_password");
        }else{
            return view("auth.passwords.reset");
        }
    }

    public function update(Request $request){
        $password = $request->password;
        $str = Session::get("str");
        $user = User::where("api_token","=",$str)->select("*")->get()->toArray();
        if($user){
            $id = $user[0]["id"];
            $data = User::find($id);
            $data->password = bcrypt($password);
            $data->save();
            Session::flash("success","Se ha restablecido su contraseña con exito");
            return redirect()->back();
        }else{
            return view("auth.passwords.reset");
        }
    }
}
