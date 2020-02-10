<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use App\Actividad;
use DB;

class OpcionController extends Controller
{
   public function index(){

 	$opciones_actividad=DB::table("opcion")
    ->join("actividad","opcion.id_actividad","=","actividad.id")
    ->select("opcion.id as id","actividad.descripcion as nombre_descripcion","opcion.descripcion as descripcion","opcion.id_actividad as id_actividad")
    ->get()->toArray();


  $actividad = Actividad::all();
 	return view('Administrador.Opciones.index')->with(['opcion'=>$opciones_actividad])->with(['actividad'=>$actividad]);
   }
 	public function store(Request $Request){

    $opciones_actividad = new Opcion;
    $opciones_actividad->id_actividad = $Request->input('actividad');
    $opciones_actividad->descripcion = $Request->input('descripcion');
    $opciones_actividad->save();
    
    return redirect('administrador/Opciones');
    
    }
    public function edit($id){

    $opciones_actividad = Opcion::find($id);
    //dd($acti);
    //return response()->json($acti,200);

    return view("Opciones.update")->with("Opciones_Actividad",$Opciones_Actividad);

   }

     public function update(Request $request, $id){
		
    $id = $request->id;
    $opciones_actividad = Opcion::find($id);
    $opciones_actividad->id_actividad = $request->actividad;
    $opciones_actividad->descripcion = $request->descripcion;
    $opciones_actividad->save();

   return redirect('administrador/Opciones');
   }

    public function destroy($id){

    $opciones_actividad = Opcion::find($id);
    $opciones_actividad->delete();
   return redirect('administrador/Opciones');
	}
}

