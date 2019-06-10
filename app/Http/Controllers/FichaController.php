<?php

namespace App\Http\Controllers;

use App\Ficha;
use Illuminate\Http\Request;
use DB;
use Session;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFichas(){
        $id = Session::get("programa");
        $fichas = DB::table("Ficha")->where("id_programa","=",$id)->select("*")->get()->toArray(); 
        return  response()->json($fichas,200);
    }
    public function getFichasuser($id){
        $fichauser = DB::table("Ficha")->where("id_programa","=",$id)->select("*")->get()->toArray();
        return response()->json($fichauser,200);
    }
    public function index()
    {
        return view("admin.ficha.index");
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
        Ficha::create([
            "id_programa" => Session::get("programa"),
            "codigo" => $request["codigo"],
            "fecha_inicio" => $request["fecha_inicio"],
            "fecha_fin" => $request["fecha_fin"],
        ]);
        return redirect("admin/ficha");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put("programa",$id);
        return; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ficha = Ficha::find($request->id);
        $ficha->id_programa = $request->id_programa;
        $ficha->codigo = $request->codigo;
        $ficha->fecha_inicio = $request->fecha_inicio;
        $ficha->fecha_fin = $request->fecha_fin;
        $ficha->save();
        return "correcto";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cant = 0;
        if($cant==0){
            $respuest = Ficha::find($id);
            $respuest->delete();
            return $cant;
        }else{
            return $cant;
        }
    }
}
