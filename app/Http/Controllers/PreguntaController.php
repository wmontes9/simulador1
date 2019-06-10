<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Respuesta;
use Illuminate\Http\Request;
use App\Cuestionario;
use DB;
use Session;
class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPreguntas()
    {
        $id = Session::get("cuestionario");
        $preguntas = DB::table("pregunta")
        ->join("cuestionario", "pregunta.id_cuestionario", "=" , "cuestionario.id")
        ->where("cuestionario.id", "=", $id)   
        ->select("pregunta.*")
        ->get()->toarray();
        return  response()->json($preguntas,200);
    }
    public function index()
    {
        return view("admin.pregunta.index");
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
        Pregunta::create([
            "id_cuestionario" => Session::get("cuestionario"),
            "descripcion" => $request["descripcion"],
        ]);
        return redirect("admin/pregunta");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("cuestionario",$id);
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pregunta = Pregunta::find($request["id"]);
        $pregunta->descripcion = $request->descripcion;
        $pregunta->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $respuesta = Respuesta::where("id_pregunta","=",$id)->select("*")->get();
        $cant = count($respuesta);
        if($cant==0){
            $pregunt = Pregunta::find($id);
            $pregunt->delete();
            return $cant;
        }else{
            return $cant;
        }
    }
}
