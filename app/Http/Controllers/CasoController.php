<?php

namespace App\Http\Controllers;

use App\Caso;
use App\Detalle_Caso;
use Illuminate\Http\Request;
use App\Programa;
use App\Competencia;
use App\Resultado;
use DB;
use Session;
class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.caso.index");
    }
    public function getCasos(){
        $caso = DB::table("caso")->select("*")->get();
        return $caso;
    }
    public function getProgramas(){
        $programas = DB::table("Programa")->select("*")->get()->toArray(); 
        $competencias = DB::table("Competencia")->select("*")->get()->toArray(); 
        $data = array($programas,$competencias);
        return  response()->json($data,200);
    }
    public function showcasoprograma($id){
        Session::put("id_caso",$id);
        return view("admin.casoprograma.index");
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
        $caso = Caso::orderBy("id","desc")->first();
        $id = $caso["id"] + 1;
        $file = $request->file("url_imagen");
        $nombre = "caso".$id.".".$file->getClientOriginalExtension();
        $file->move("imgcaso/",$nombre);

        $caso = Caso::create([
            "titulo" => $request["titulo"],
            "descripcion" => $request["descripcion"],
            "url_imagen" => $nombre,
            "url_video" => $request["video"]
        ]);
        return redirect('admin/caso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(Caso $caso)
    {
        dd("show");
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit(Caso $caso)
    {
        dd("edit");
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        //dd($id);
        $file = $request->file("url_imagen_e");
        if($file){
            $nombre = "caso".$id.".".$file->getClientOriginalExtension();
            $file->move("imgcaso/",$nombre);
        }
        $caso = Caso::find($request["id"]);
        $caso->titulo = $request->titulo;
        $caso->descripcion = $request->descripcion;
        if($file){
            $caso->url_imagen = $nombre;
        }
        $caso->url_video = $request->video_e;
        $caso->save();
        return redirect('admin/caso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resulta = Detalle_Caso::where("id_caso","=",$id)->select("*")->get();
        $cant = count($resulta);
        if($cant==0){
            $caso = Caso::find($id);
            $caso->delete();
            return $cant;
        }else{
            return $cant;
        }
    }
}
