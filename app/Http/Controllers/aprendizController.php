<?php

namespace App\Http\Controllers;
use App\Caso;
use Illuminate\Http\Request;
use App\Programa;
use App\Competencia;
use App\Resultado;
use App\users;
use DB;
use Session;
use Auth;
class aprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfoInicio()
    {
        $usuario_autenticado = Auth::User()->id;
        //ajustar consulta
        $caso = DB::table("users")
        ->join('detalle_ficha', 'detalle_ficha.id_user', '=', 'users.id')
        ->join('ficha', 'detalle_ficha.id_ficha', '=', 'ficha.id')
        ->join('programa', 'ficha.id_programa', '=', 'programa.id')
        ->join('competencia', 'competencia.id_programa', '=', 'programa.id')
        ->join('resultado', 'resultado.id_competencia', '=', 'competencia.id')
        ->join('detalle_resultado', 'detalle_resultado.id_resultado', '=', 'resultado.id')
        ->join('caso', 'detalle_resultado.id_caso', '=', 'caso.id')
        ->join('detalle_caso', 'detalle_caso.id_caso', '=', 'caso.id')
        ->where("detalle_ficha.id_user","=",$usuario_autenticado)
        ->select("caso.*","detalle_caso.*")->get();
        return $caso;
    }
    public function getinfocaso(){
        $caso = Session::get("caso");
        $usuario_autenticado = Auth::User()->id;
        $casos = DB::table("caso")
        ->join('detalle_caso', 'detalle_caso.id_caso', '=', 'caso.id')
        ->where("caso.id","=",$caso)
        ->select("caso.*")->get()->toArray();
        $idcaso=$casos[0]->id;
        $resultado = DB::table("detalle_resultado")
        ->join('caso', 'detalle_resultado.id_caso', '=', 'caso.id')
        ->join('resultado', 'detalle_resultado.id_resultado', '=', 'resultado.id')
        ->join('competencia', 'resultado.id_competencia', '=', 'competencia.id')
        ->where("detalle_resultado.id_caso","=","$idcaso")
        ->select("resultado.id as id_resultado","resultado.descripcion as descripcion_resultado","competencia.id as id_competencia","competencia.descripcion as descripcion_competencia")
        ->get()->toArray();
        $caso = DB::table("users")
        ->join('detalle_ficha', 'detalle_ficha.id_user', '=', 'users.id')
        ->join('ficha', 'detalle_ficha.id_ficha', '=', 'ficha.id')
        ->join('programa', 'ficha.id_programa', '=', 'programa.id')
        ->where("users.id","=",$usuario_autenticado)
        ->select("programa.*","Ficha.codigo as codigo_ficha")->get();
        $idprograma = $caso[0]->id;
        $competencia = DB::table("competencia")
        ->join('programa', 'competencia.id_programa', '=', 'programa.id')
        ->where("competencia.id_programa","=",$idprograma)
        ->select("competencia.id as id_competen","competencia.id_programa as id_programa","competencia.codigo as codigo_competencia", "competencia.descripcion as descripcion_competencia")
        ->get()->toArray();
        $data = array($competencia,$resultado,$casos);
        return  response()->json($data,200);
    }
    public function getdescripcion(){
    $caso = Session::get("caso");  
    $caso = DB::table("caso")
    ->where("caso.id","=",$caso)
    ->select("caso.*")->get();
    return view("Inicio.descripcion")->with("caso",$caso);
    }
    public function getaudiencia(){
        $caso = Session::get("caso");  
        $caso = DB::table("caso")
        ->join('detalle_caso', 'detalle_caso.id_caso', '=', 'caso.id')
        ->where("caso.id","=",$caso)
        ->select("caso.*","detalle_caso.*")->get();
        return view("Inicio.Audiencia")->with("caso",$caso);
        }
   public function getinfo(){
    return view("Inicio.aprendiz"); 
    }
    public function index()
    {
        return view("Inicio.index");
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
     * @param  int  $id
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
