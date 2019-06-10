<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use DB;
use Session;
class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar_programas($idCenter){
        $programas = Programa::where("id_centro","=",$idCenter)->select("*")->get();
        return view("admin.programa.index")->with("programas",$programas);
    }

    public function index()
    {
        return view("admin.programa.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.programa.create");
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
        //dd($request);
        Programa::create([
            "nombre" => $request["nombre"],
            "codigo" => $request["codigo"],
            "nivel_formacion" => $request["nivel_formacion"],
            "version" => $request["version"],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("id_programa",$id);
        return view("admin.programa.index");
    }
    //public function getProgramasCenter($id){
        //$programas = Programa::where("id_centro","=",$id)->select("*")->get();
        //return $programas;
    //}
    public function getProgramas(){
    $program = DB::table("programa")->select("*")->get();
    //dd($program);
    return $program;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $programa = Programa::find($request["id"]);
        $programa->nombre = $request->nombre;
        $programa->codigo = $request->codigo;
        $programa->nivel_formacion = $request->nivel_formacion;
        $programa->estado = $request->estado;
        $programa->version = $request->version;
        $programa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
    }
}
