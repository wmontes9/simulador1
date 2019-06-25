<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuestionario;
use App\Pregunta;
use App\Detalle_Cuestionario;
use App\Competencia;
use App\Conocimiento_Previo;
use DB;
use Session;
use Auth;

class CuestionarioUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCuestionusuarios(){
        $usuario_autenticado = Auth::User()->id;
        $id = Session::get("competencia");
        $cuestionario = DB::table("cuestionario")
        ->join('detalle_cuestionario', 'detalle_cuestionario.id_cuestionario', '=', 'cuestionario.id')
        ->join('competencia', 'detalle_cuestionario.id_competencia', '=', 'competencia.id')
        ->where('competencia.id', '=', $id)   
        ->select("cuestionario.*")
        ->get()->toArray();
        $id_cuestionario = $cuestionario[0]->id;
        Session::put("cuestionario",$id_cuestionario);
        $preguntas =DB::table("cuestionario")
        ->join('pregunta', 'pregunta.id_cuestionario', '=', 'cuestionario.id')
        ->where('pregunta.id_cuestionario', '=', $id_cuestionario) 
        ->select("pregunta.*")
        ->get();
        //$lengt = count($preguntas);
        $respuestas =DB::table("respuesta")
        ->join('pregunta', 'respuesta.id_pregunta', '=', 'pregunta.id')
        ->join('cuestionario', 'pregunta.id_cuestionario', '=', 'cuestionario.id')
        ->inRandomOrder()
        ->select("respuesta.*")
        ->get();
        //return  response()->json($cuestionarios,200);
        $data = array($cuestionario,$preguntas,$respuestas);
        return  response()->json($data,200);
        //return $cuestionario;
    }
    public function index()
    {
        return view("cuestionario.index");
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
        $array =$request->all();
        $longitud = count($array);
        $valorpregunta = 100/($longitud-1);
        $cuenta = 0;
        foreach ($array as $key => $value) {
            $pregunta = strpos($key, "preg");
            if($pregunta !== false){                
                if($value === "true"){
                    $cuenta++;
                }                
            }
        }
        $calificacion = round($cuenta*$valorpregunta, 2);
        $iduser = Auth::User()->id;
        Conocimiento_Previo::create([
            "id_cuestionario" => Session::get("cuestionario"),
            "id_usuario" => $iduser,
            "fecha" => date("Y-m-d"),
            "calificacion" => $calificacion,
        ]);

        //$galeria = galeria::all();   
        //return view("admin/Galeria.index")->with("galeria",$galeria);
        return redirect("actividades");//Despues de presentar cuestionario
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("competencia",$id);
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
