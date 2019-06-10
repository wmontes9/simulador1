<?php

namespace App\Http\Controllers;

use App\Detalle_Resultado;
use Illuminate\Http\Request;
use DB;
use Session;
class DetalleResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $nresultados = count($request["resultado"]);
        //dd($nresultados);
        for($i = 0; $i < $nresultados; $i++){
            Detalle_Resultado::create([
                "id_caso" => Session::get("id_caso"),
                "id_resultado" => $request["resultado"][$i],
                "id_tipo_resultado" => $request["tipo-result"][$i],
            ]);
        }
        return redirect("admin/caso");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle_Resultado  $detalle_Resultado
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle_Resultado $detalle_Resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle_Resultado  $detalle_Resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_Resultado $detalle_Resultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalle_Resultado  $detalle_Resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalle_Resultado $detalle_Resultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle_Resultado  $detalle_Resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle_Resultado $detalle_Resultado)
    {
        //
    }
}
