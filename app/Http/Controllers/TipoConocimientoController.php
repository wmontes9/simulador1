<?php

namespace App\Http\Controllers;

use App\Tipo_Conocimiento;
use Illuminate\Http\Request;
use DB;
use Session;
class TipoConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function getTipoConocimiento(){
        $tipos = DB::table("Tipo_Conocimiento")->select("*")->get()->toArray();
        //dd($resultados);
        //return $resultados;  
        return  response()->json($tipos,200); 
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_Conocimiento  $tipo_Conocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Conocimiento $tipo_Conocimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_Conocimiento  $tipo_Conocimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Conocimiento $tipo_Conocimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_Conocimiento  $tipo_Conocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Conocimiento $tipo_Conocimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_Conocimiento  $tipo_Conocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Conocimiento $tipo_Conocimiento)
    {
        //
    }
}
