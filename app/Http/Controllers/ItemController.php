<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Evaluacion;
use App\Actividad;
use App\Item;
use DB;
class ItemController extends Controller
{
    public function index(){

    $evaluacion=DB::table("Evaluacion")
    ->select("evaluacion.id","evaluacion.nombre")->get()->toArray();

    $item=DB::table("Item")
    ->join("evaluacion","item.id_evaluacion","=","evaluacion.id")
    ->select("item.id as id","evaluacion.nombre as nombre","item.id_evaluacion as ids","item.puntos as puntos","item.descripcion as descripcion")
    ->get()->toArray();

    $evaluacion = Evaluacion::all();
    return view('Administrador/Items.index')->with(['item'=>$item])->with(['evaluacion'=>$evaluacion]);
   }
   public function store(Request $Request){

    $item = new Item;
    $item->id_evaluacion = $Request->input('actividad');
    $item->puntos = $Request->input('puntos');
    $item->descripcion = $Request->input('descripcion');

    $item->save();
    
    return redirect('administrador/items');
    
    }
    public function edit($id){

    $it = Item::find($id);
    //dd($acti);
    //return response()->json($acti,200);

    return view("administrador.items")->with("it",$it);

   }

  public function update(Request $request, $id){
    $id = $request->id;
    $item = Item::find($id);
    $item->id_evaluacion = $request->evaluacion;
    $item->puntos = $request->puntos;
    $item->descripcion = $request->descripcion;
  
    $item->save();

   return redirect('administrador/items');
   }

   public function destroy($id){
    $item = Item::find($id);
    $item->delete();
    return redirect('administrador/items');
  }

}
