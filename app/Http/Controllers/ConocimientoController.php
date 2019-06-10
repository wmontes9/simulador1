<?php

namespace App\Http\Controllers;

use App\Conocimiento;
use App\Competencia;
use App\Tipo_Conocimiento;
use Illuminate\Http\Request;
use DB;
use Session;
class ConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.conocimiento.index");
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
        $conocim = Conocimiento::create([
            "id_competencia" => Session::get("competencia"),
            "id_tipoconocimiento" => $request["nombre_tipo"],
            "descripcion" => $request["descripcion"],
        ]);
        return redirect("admin/conocimiento");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function getConocimientos(){
        $id = Session::get("competencia");
        //dd("getconocimientos");
        $conocimientos = DB::table("Conocimiento")
        ->join("tipo_conocimiento","Conocimiento.id_tipoconocimiento","=","tipo_conocimiento.id")
        ->join("Competencia","Competencia.id","=","conocimiento.id_competencia")
        ->where("competencia.id","=",$id)
        ->select("conocimiento.*","tipo_conocimiento.id as id_tipo","tipo_conocimiento.nombre_tipo")
        ->get()->toArray();
        return  response()->json($conocimientos,200);
    }
    public function show($id)
    {
        Session::put("competencia",$id);
        return;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Conocimiento $conocimiento)
    {
        dd("edit");
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $conocimiento = Conocimiento::find($request->id);
        $conocimiento->id_tipoconocimiento = $request->id_tipo;
        $conocimiento->descripcion = $request->descripcion;
        $conocimiento->save();
        $tipoconocimiento = Tipo_Conocimiento::find($request->id_tipo);
        
        $tipoconocimiento->save();
        return "correcto";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conocimiento = Conocimiento::find($id);
        $conocimiento->delete();
    }
}
