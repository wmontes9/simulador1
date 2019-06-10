<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Evaluacion;
use App\Actividad;
use DB;
class EvaluacionController extends Controller
{
    public function index(){
 	$evaluacion=DB::table("evaluacion")
    ->join("actividad","evaluacion.id_actividad","=","actividad.id")
    ->select("evaluacion.id as id","actividad.descripcion as nombre_descripcion","evaluacion.nombre as nombre","evaluacion.descripcion as descripcion","evaluacion.id_actividad as id_actividad")
    ->get()->toArray();

    $actividad = Actividad::all();
 	return view('Administrador/Evaluacion.index')->with(['evaluacion'=>$evaluacion])->with(['actividad'=>$actividad]);
   }

    public function store(Request $Request){

    $evaluacion = new Evaluacion;
    $evaluacion->id_actividad = $Request->input('actividad');
    $evaluacion->nombre = $Request->input('nombre');
    $evaluacion->descripcion = $Request->input('descripcion');

    $evaluacion->save();
    
    return redirect('administrador/evaluacion');
    
    }

   	public function edit($id){

    $eva = Evaluacion::find($id);
    //dd($acti);
    //return response()->json($acti,200);

    return view("Administrador/Evaluacion.update")->with("eva",$eva);

   }

     public function update(Request $request, $id){
		
    $id = $request->id;
    $evaluacion = Evaluacion::find($id);
    $evaluacion->id_actividad = $request->actividad;
    $evaluacion->nombre = $request->nombre;
    $evaluacion->descripcion = $request->descripcion;
  
    $evaluacion->save();

   return redirect('administrador/evaluacion');
   }

    public function destroy($id){

    $evaluacion = Evaluacion::find($id);
    $evaluacion->delete();
    return redirect('administrador/evaluacion');
}

}
