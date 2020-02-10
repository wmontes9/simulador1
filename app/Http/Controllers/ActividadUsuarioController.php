<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competencia;
use App\Conocimiento_Previo;
use DB;
use Session;
use Auth;
class ActividadUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listactividades()
    {
        $usuario_autenticado = Auth::User()->id;
        $id = Session::get("competencia");
        $idc = Session::get("cuestionario");
        $caso = Session::get("caso");
        $resultado = DB::table("detalle_resultado")
        ->join('caso', 'detalle_resultado.id_caso', '=', 'caso.id')
        ->join('resultado', 'detalle_resultado.id_resultado', '=', 'resultado.id')
        ->join('competencia', 'resultado.id_competencia', '=', 'competencia.id')
        ->where("detalle_resultado.id_caso","=","$caso")
        ->select("resultado.id as id_resultado","resultado.descripcion as descripcion_resultado","competencia.id as id_competencia","competencia.descripcion as descripcion_competencia")
        ->get()->toArray();
        $competencia = DB::table("competencia")
        ->where('competencia.id', '=', $id)   
        ->select("competencia.*")
        ->get()->toArray();
        $actividad = DB::table("actividad")
        ->join('resultado', 'actividad.id_resultado', '=', 'resultado.id')
        ->join('detalle_resultado', 'detalle_resultado.id_resultado', '=', 'resultado.id')
        ->where("detalle_resultado.id_caso","=","$caso")
        ->select("actividad.*","resultado.id_competencia as id_compe","resultado.id as id_result")
        ->get()->toArray();
        $anexo_actividad = DB::table("Anexo_Actividad")
        ->join('actividad','anexo_actividad.id_actividad','actividad.id')
        ->join('resultado', 'actividad.id_resultado', '=', 'resultado.id')
        ->join('detalle_resultado', 'detalle_resultado.id_resultado', '=', 'resultado.id')
        ->where("detalle_resultado.id_caso","=","$caso")
        ->select("anexo_actividad.*")
        ->get()->toArray();
        $data = array($competencia,$resultado,$actividad,$anexo_actividad);
        return  response()->json($data,200);
    }
    public function index()
    {
        return view("actividad.index");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
