<?php

namespace App\Http\Controllers;

use App\Opcion;
use Illuminate\Http\Request;
use DB;


class OpcionUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOpcion()
    {
        $opciones = DB::table("Opcion")
        ->inRandomOrder()
        ->select("*")->get()->toArray();
        return response()->json($opciones,200);
    }
    public function index()
    {
        return view("Opciones.index");
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
     * @param  \App\Opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function show(Opcion $opcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Opcion $opcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opcion $opcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opcion $opcion)
    {
        //
    }
}
