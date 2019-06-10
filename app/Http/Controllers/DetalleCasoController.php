<?php

namespace App\Http\Controllers;

use App\Detalle_Caso;
use Illuminate\Http\Request;
use DB;
use Session;
class DetalleCasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.detalle_caso.index");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetalleCaso(){
        $id = Session::get("caso");
        $detalles = DB::table("Detalle_Caso")->where("id_caso","=",$id)->select("*")->get()->toArray();
        //dd($resultados);
        //return $resultados;  
        return  response()->json($detalles,200);
        //$resultado = response()->json($resultados,200);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Detalle_Caso::create([
            "id_caso" => Session::get("caso"),
            "proposito" => $request["proposito"],
            "audiencia" => $request["audiencia"],
            "enfoque" => $request["enfoque"],
            "metodo" => $request["metodo"],
            "fecha_elaboracion" => $request["fecha_elaboracion"],
            "estado" => $request["estado"],
            "tiempo_promedio" => $request["tiempo_promedio"]
        ]);
        return redirect("admin/detalle");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle_Caso  $detalle_Caso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("caso",$id);
        return;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle_Caso  $detalle_Caso
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_Caso $detalle_Caso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalle_Caso  $detalle_Caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detallecaso = Detalle_Caso::find($request->id);
        $detallecaso->id_caso = $request->id_caso;
        $detallecaso->proposito = $request->proposito;
        $detallecaso->audiencia = $request->audiencia;
        $detallecaso->enfoque = $request->enfoque;
        $detallecaso->metodo = $request->metodo;
        $detallecaso->fecha_elaboracion = $request->fecha_elaboracion;
        $detallecaso->estado = $request->estado;
        $detallecaso->tiempo_promedio = $request->tiempo_promedio;
        $detallecaso->save();
        return "correcto";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle_Caso  $detalle_Caso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = Detalle_Caso::find($id);
        $detalle->delete();
        //
    }
}
