<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Tipo_Documento;
use App\User_Type;
use App\Programa;
use App\Detalle_Ficha;
use App\Ficha;
use DB;
use Session;
use App\Rol;

class UserController extends Controller
{
   public function index(){
      $id=Session::get("id_user");
      $users=DB::table("users")
      ->join("tipo_documento","users.id_tipo_documento","=","tipo_documento.id")
      ->join("user_type","user_type.id_user","=","users.id")
      ->join("rol","user_type.id_rol","=","rol.id")
      ->select("users.id as id","tipo_documento.nombre_documento as nombre","users.id_tipo_documento as tipodocumento","rol.nombre as tipousuarios","rol.id as ids","users.name as name","users.apellido as apellido","users.documento as documento","users.password as password","users.estado as estado","users.telefono as telefono","users.email as email")
      ->get()->toArray();

      $rols = Rol::get();
      //$tipos=DB::table("user_type")
      //->join("users","user_type.id_user","=","users.id")
      //->join("rol","user_type.id_rol","=","rol.id")
      //->select("user_type_id as id","users.name as nombre")

      $documento=DB::table("tipo_documento")
      ->select("tipo_documento.id","tipo_documento.nombre_documento")->get()->toArray();


      $tipousuario=DB::table("user_type")
      ->join("rol","user_type.id","=","rol.id")
      ->select("user_type.id as ids","rol.nombre as nom")->get()->toArray();

      $programas = DB::table("programa")
      ->select("*")->get()->toArray();


 	return view('Users.index')->with("users",$users)->with("tipodocumento",$documento)->with("tipousuarios",$tipousuario)->with("rols",$rols)->with("programas",$programas);
   }

   public function create(){

   	return view('Users.create');
   }

   public function store(Request $Request){
      $users = new User;
      $users->id_tipo_documento = $Request->input('tipodocumento');
      $users->name = $Request->input('name');
      $users->apellido = $Request->input('apellido');
      $users->documento = $Request->input('documento');
      $users->password = $Request->input('password');
      $users->estado = $Request->input('estado');
      $users->telefono = $Request->input('telefono');
      $users->email = $Request->input('email');

      $users->save();
      return redirect('administrador/users');
   }

   public function destroy($id){
      $users = User::find($id);
      $users->delete();
      return redirect('administrador/users');
   }

   public function edit($id){

 $acti = Actividad::find($id);

    $users = User::find($id);
    //return view("users.update")->with("users",$users);
   }

   public function update(Request $request, $id){
      $id = $request->id;
      $users = User::find($id);
      $users->id_tipo_documento = $request->tipodocumento;
      $users->name = $request->names;
      $users->apellido = $request->apellidos;
      $users->documento = $request->documentos;
      $users->password = $request->passwords;
      $users->estado = $request->estados;
      $users->telefono = $request->telefonos;
      $users->email = $request->emails;

      //
      $rol = $request->tipousuario;
      $user_type = User_Type::where("id_user","=",$id)->select("*")->get()->toArray();
      $id_user_type = $user_type[0]["id"];
      $user_rol = User_Type::find($id_user_type);
      $user_rol->id_rol = $request->tipousuario;

      Detalle_Ficha::create([
      "id_ficha" => $request["fichauser"],
      "id_user" => $id,
      ]);
      $user_rol->save();
      $users->save();
      return redirect('administrador/users');
    
   }
}
