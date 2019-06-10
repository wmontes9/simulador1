<?php

namespace App\Http\Controllers;
use App\Actividad;
use App\Resultado;
use DB;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
   public function index(){

    $actividad=DB::table("actividad")
    ->join("resultado","actividad.id_resultado","=","resultado.id")
    ->select("actividad.id as id","resultado.descripcion as nombre","actividad.id_resultado as idresultado","actividad.descripcion as descripcion","actividad.estado as estado")
    ->get()->toArray();

    $resultado = Resultado::all();
    return view('administrador.inicio',['actividad'=>$actividad],['resultado'=>$resultado]);
  
   }
   public function create(){

    return redirect('administrador/actividad');

   }

   public function store(Request $Request){

    $actividad = new Actividad;
    $resultado=new Resultado;
    $actividad->id_resultado = $Request->input('resultado');
    $actividad->descripcion = $Request->input('descripcion');
    $actividad->estado = $Request->input('estado');

    $actividad->save();
    
    return redirect('administrador/actividad');
    }

   public function destroy($id){
  $actividad = Actividad::find($id);
  $actividad->delete();
  return redirect('administrador/actividad');
}
   public function edit($id){
    $acti = Actividad::find($id);
    //dd($acti);
    //return response()->json($acti,200);

    return view("Administrador.update")->with("acti",$acti);

   }

   public function update(Request $request, $id){

    $id = $request->id;
    $actividad = Actividad::find($id);
    $actividad->id_resultado = $request->result;
    $actividad->descripcion = $request->descripcion;
    $actividad->estado = $request->estado;
    $actividad->save();
    //


    return redirect('administrador/actividad');
   }

}
