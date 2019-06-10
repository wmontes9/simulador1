<?php

namespace App\Http\Controllers;
use App\Anexo_Actividad;
use DB;

use Illuminate\Http\Request;

class AnexoActiController extends Controller
{
    public function index(){
//
	}

    public function create(){

    return redirect('administrador/AnexoActi/index');
    }


    public function store(Request $request){
       $id = $request->idActividad;
        foreach ($request->all() as $key  => $value) {
            if($key=="anexo"){
                foreach ($value as $key => $value) {
                    $anexo = Anexo_Actividad::create([
                        "id_actividad" => $id,
                        "url_anexo" => $value
                    ]);
                }
            }
        }

        return redirect()->back();
    }


    public function getAnexos($id){
        $anexos = Anexo_Actividad::where("id_actividad","=",$id)->select("*")->get();
        return response()->json($anexos);
    }

    public function destroy($id){
        $anexo = Anexo_Actividad::find($id);
        $anexo->delete();
        return redirect()->back();
    }
}