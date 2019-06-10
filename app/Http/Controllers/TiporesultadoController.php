<?php

namespace App\Http\Controllers;

use App\tiporesultado;
use Illuminate\Http\Request;
use DB;
use Session;
class TiporesultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gettipos()
    {  
        $tipo_resultado = DB::table("tiporesultado")->select("*")->get(); 
        //$tipos = DB::table("tiporesultados")->where("id_caso","=",$id)->select("*")->get();
        //$data = array($tipo_resultado);
        //dd($data);
        return  response()->json($tipo_resultado,200);
    }
    public function index()
    {
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
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tiporesultado  $tiporesultado
     * @return \Illuminate\Http\Response
     */
    public function show(tiporesultado $tiporesultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tiporesultado  $tiporesultado
     * @return \Illuminate\Http\Response
     */
    public function edit(tiporesultado $tiporesultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiporesultado  $tiporesultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiporesultado $tiporesultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiporesultado  $tiporesultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiporesultado $tiporesultado)
    {
        //
    }
}
