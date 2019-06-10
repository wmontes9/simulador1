<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\Competencia;
use App\Resultado;
use DB;
use Session;
class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function create()
    {
        $competencias = Competencia::all();
        return view("Competencia.create")->with("competencias",$competencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Competencia::create([
            "id_programa" => Session::get("id_programa"),
            "codigo" => $request["codigo"],
            "descripcion" => $request["descripcion"],
            "url_videoc" => $request["url_videoc"]
        ]);
        return;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competencia = Competencia::find($id);
        return view("Competencia.edit")->with("competencia",$competencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competencia = Competencia::find($request->id);
        $competencia->id_programa = $request->id_programa;
        $competencia->codigo = $request->codigo;
        $competencia->descripcion = $request->descripcion;
        $competencia->url_videoc = $request->url_videoc;
        $competencia->save();
        return "correcto";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resulta = Resultado::where("id_competencia","=",$id)->select("*")->get();
        $cant = count($resulta);
        if($cant==0){
            $competencia = Competencia::find($id);
            $competencia->delete();
            return $cant;
        }else{
            return $cant;
        }
    }
    public function getCompetencia($id)
    {
        Session::put("id_programa",$id);
        $competencias = DB::table('competencia')
            ->join('programa', 'competencia.id_programa', '=', 'programa.id')
            ->where('competencia.id_programa', '=', $id)
            ->select('competencia.*', 'programa.nombre')
            ->get();
        //$competencias = Competencia::where("id_programa","=",$id)->select("*")->get();
        return  response()->json($competencias,200);
    }
}
