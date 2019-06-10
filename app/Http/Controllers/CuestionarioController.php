<?php

namespace App\Http\Controllers;
use App\Cuestionario;
use Illuminate\Http\Request;
use App\Pregunta;
use App\Detalle_Cuestionario;
use DB;
use Session;
use Auth;
class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCuestionario(){
        $id = Session::get("competencia");
        $cuestionarios = DB::table("detalle_cuestionario")
        ->join('cuestionario', 'detalle_cuestionario.id_cuestionario', '=', 'cuestionario.id')
        ->join('competencia', 'detalle_cuestionario.id_competencia', '=', 'competencia.id')
        ->where('competencia.id', '=', $id)   
        ->select("cuestionario.*","detalle_cuestionario.*")
        ->get()->toarray();
        return  response()->json($cuestionarios,200);
    }
    public function index()
    {
        return view("admin.cuestionario.index");
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
        $cuestionario = Cuestionario::create([
            "id_caso" => Session::get("caso"),
            "titulo" => $request["titulo"], 
            "descripcion" => $request["descripcion"],
        ]);
        $id_cuestionario = $cuestionario["id"];
        Detalle_Cuestionario::create([
            "id_cuestionario" => $id_cuestionario,
            "id_competencia" => Session::get("competencia"),
            "fecha_cuestionario" => date("Y-m-d"),
            "estado" => $request["estad"],
            "duracion" => $request["duracion"],
        ]);
        return redirect("admin/cuestionario");

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("competencia",$id);
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuestionario $cuestionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuestionario $cuestionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = Detalle_Cuestionario::where("id_cuestionario","=",$id)->select("*")->get();
        $cant = count($detalle);
        if($cant==0){
            $cuest = Cuestionario::find($id);
            $cuest->delete();
            return $cant;
        }else{
            return $cant;
        }
        
        
    }
}
