<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\Resultado;
use App\Detalle_Resultado;
use Illuminate\Http\Request;
use DB;
use Session;
class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.resultado.index");
    }


    public function getResultados(){
        $id = Session::get("competencia");
        $resultados = DB::table("Resultado")->where("id_competencia","=",$id)->select("*")->get()->toArray();
        //realizar consulta de resultados insertados en BD
        //$resultado = DB::table("Detalle_Resultado")->where("id_competencia","=",$id)->select("*")->get()->toArray();
        //dd($resultado);
        //dd($resultados);
        //return $resultados;  
        return  response()->json($resultados,200);
        //$resultado = response()->json($resultados,200);
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
        //dd($request->all());
        Resultado::create([
            "id_competencia" => Session::get("competencia"),
            "codigo" => $request["codigo"],
            "descripcion" => $request["descripcion"],
        ]);
        return redirect("admin/resultado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        Session::put("competencia",$id);
        return;
        //return view("admin.resultado.index")->with("resultados",$resultados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resultado = Resultado::find($request->id);
        $resultado->id_competencia = $request->id_competencia;
        $resultado->codigo = $request->codigo;
        $resultado->descripcion = $request->descripcion;
        $resultado->save();
        return "correcto";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $resultado = Resultado::find($id);
        $resultado->delete();
    }
    public function getResultado($id)
    {
        $resultados = DB::table('resultado')
            ->join('competencia', 'resultado.id_competencia', '=', 'competencia.id')
            ->where('resultado.id_competencia', '=', $id)
            ->select('resultado.*')
            ->get()->toArray();
        //dd($resultados);
        //consultar detalle resultado del caso con sus resultados
        $resultado = DB::table("Detalle_Resultado")
        ->join('resultado','Detalle_Resultado.id_resultado','=','resultado.id')
        ->where("resultado.id_competencia","=",$id)
        ->select("*")->get()->toArray();
        $data = array($resultados,$resultado);
        return  response()->json($data,200);
    }
}
