<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Caso;
use App\Detalle_Caso;
use DB;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function casos()
    {
        return view('Inicio.index');
    }
    public function casousuario($id){
        Session::put("casousuario",$id);
        return view("Inicio.aprendiz");
    }
    public function infocaso(){
        $id = Session::get("casousurio");
        $caso = DB::table("Caso")
        ->join("Detalle_Caso", "Detalle_Caso.id_caso", "=", "Caso.id")
        ->where("Detalle_Caso.id_caso", "=", $id)
        ->select("Caso.*","Detalle_Caso.*")
        ->get()->toArray();
        return  response()->json($caso,200);
    }
}
