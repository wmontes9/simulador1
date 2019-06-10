<?php

namespace App\Http\Controllers;

use App\Objetivo;
use Illuminate\Http\Request;
use DB;
use Session;
class ObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.objetivo.index");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        Objetivo::create([
            "id_caso" => Session::get("caso"),
            "descripcion" => $request["descripcion"],
        ]);
        return redirect("admin/objetivo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function getObjetivo(){
        $id = Session::get("caso");
        $objetivos = DB::table("Objetivo")->where("id_caso","=",$id)->select("*")->get()->toArray();
        //dd($resultados);
        //return $resultados;  
        return  response()->json($objetivos,200);
        //$resultado = response()->json($resultados,200);
    }
    public function show($id)
    {
        Session::put("caso",$id);
        return;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Objetivo $objetivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objetivo = Objetivo::find($request->id);
        $objetivo->id_caso = $request->id_caso;
        $objetivo->descripcion = $request->descripcion;
        $objetivo->save();
        return "correcto";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objetivo = Objetivo::find($id);
        $objetivo->delete();
        //
    }
}
