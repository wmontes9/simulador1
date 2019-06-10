<?php

namespace App\Http\Controllers;

use App\Respuesta;
use Illuminate\Http\Request;
use DB;
use Session;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRespuestas(){
        $id = Session::get("pregunta");
        $respuestas = DB::table("respuesta")
        ->join('pregunta', 'respuesta.id_pregunta', '=', 'pregunta.id')
        ->where('pregunta.id', '=', $id)   
        ->select("respuesta.*")
        ->get()->toarray();
        return  response()->json($respuestas,200);
    }
    public function index()
    {
        return view("admin.respuesta.index");
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
        Respuesta::create([
            "id_pregunta" => Session::get("pregunta"),
            "descripcion" => $request["descripcion"],
        ]);
        return redirect("admin/respuesta");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("pregunta",$id);
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $respuesta = Respuesta::find($request["id"]);
        $respuesta->descripcion = $request->descripcion;
        $respuesta->validacion = $request->validacion;
        $respuesta->save();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cant = 0;
        if($cant==0){
            $respuest = Respuesta::find($id);
            $respuest->delete();
            return $cant;
        }else{
            return $cant;
        }
    }
}
