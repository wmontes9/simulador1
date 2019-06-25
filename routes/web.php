<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(["middleware"=>"protected_route"],function(){
    Route::get("admin/programa/getProgramas","ProgramaController@getProgramas");
    Route::resource("/admin/programa","ProgramaController");
    Route::post("admin/programa/update/{id}","ProgramaController@update");
    Route::resource("admin/competencia","CompetenciaController");
    //Route::post("admin/competencia/store","CompetenciaController@store");
    Route::get("admin/competencia/getCompetencias/{id}","CompetenciaController@getCompetencias");
    Route::get("admin/getCompetencia","CompetenciaController@getCompetencia");
    Route::get("admin/getResultados","ResultadoController@getResultados");
    Route::get("admin/getResultado/{id}","ResultadoController@getResultado");
    Route::resource("admin/resultado","ResultadoController");
    Route::get("admin/caso/getCasos","CasoController@getCasos");
    Route::get("admin/caso/getprogramas","CasoController@getProgramas");
    Route::get("admin/casoprograma/{id}","CasoController@showcasoprograma");
    Route::post("admin/caso/update/{id}","CasoController@update");
    Route::resource("admin/caso","CasoController");
    Route::get("admin/getDetalle","DetalleCasoController@getDetalleCaso");
    Route::resource("admin/detalle","DetalleCasoController");
    Route::get("admin/getObjetivo","ObjetivoController@getObjetivo");
    Route::resource("admin/objetivo","ObjetivoController");
    Route::get("admin/getConocimiento","ConocimientoController@getConocimientos");
    Route::resource("admin/conocimiento","ConocimientoController");
    Route::get("admin/getTipoConocimiento","TipoConocimientoController@getTipoConocimiento");
    Route::resource("admin/tipoconocimiento","TipoConocimientoController");
    //Route::get("inicio","HomeController@casos");
    Route::resource("aprendiz","aprendizController");
    Route::get("inicio","aprendizController@getInfoInicio");
    Route::get("infoaprendiz","aprendizController@getinfo");
    Route::get("descripcion","aprendizController@getdescripcion");
    Route::get("audiencia","aprendizController@getaudiencia");
    Route::get("infocasoUsuario","aprendizController@getinfocaso");

    Route::get("caso/{id}","HomeController@casousuario");
    Route::get("admin/getTipoResultado","TiporesultadoController@gettipos");
    Route::resource("admin/detalleresultado","DetalleResultadoController");
    Route::get("admin/getCuestionario","CuestionarioController@getCuestionario");
    Route::resource("admin/cuestionario","CuestionarioController");
    Route::get("admin/getPregunta","PreguntaController@getPreguntas");
    Route::resource("admin/pregunta","PreguntaController");
    Route::get("admin/getRespuesta","RespuestaController@getRespuestas");
    Route::resource("admin/respuesta","RespuestaController");
    Route::get("admin/getFicha","FichaController@getFichas");
    Route::resource("admin/ficha","FichaController");
    Route::get("administrador/getFichas/{id}","FichaController@getFichasuser");
    Route::get("getCuestionusuario","CuestionarioUsuarioController@getCuestionusuarios");
    Route::resource("cuestionarioUsuario","CuestionarioUsuarioController");
    Route::get("getactividades","ActividadUsuarioController@listactividades");
    Route::resource("actividades","ActividadUsuarioController");
    
//------------------Tocayo------------------//
    Route::group(["prefix"=>"administrador"],function(){//´Grupo de rutas indicando un prefijo identificador 
        Route::resource("administrador/actividad","ActividadController");
        Route::resource("actividad","ActividadController");
        Route::resource("users","UserController");
        Route::resource("evaluacion","EvaluacionController");
        Route::resource("Opciones","OpcionController");//detalles actividad
        Route::resource("items","ItemController");
        Route::get("actividad/delete/{id}","ActividadController@destroy");
        //anexos
        Route::resource("anexo","AnexoActiController");
        Route::get("anexo/getAnexos/{id}","AnexoActiController@getAnexos");
        Route::get("anexo/delete/{id}","AnexoActiController@destroy");
        //
    });
    Route::get("administrador/actividad/{id}/edit","ActividadController@edit");
	Route::get("administrador/update/{id}","ActividadController@update");
	Route::get("administrador/users/{id}/edit","UserController@edit");
	Route::get("administrador/users/delete/{id}","UserController@destroy");
    Route::get("administrador/users/update/{id}","UserController@update");
    Route::get("administrador/evaluacion/{id}edit"."EvaluacionController@edit");
	Route::get("administrador/evaluacion/update/{id}","EvaluacionController@update");
	Route::get("administrador/evaluacion/delete/{id}","EvaluacionController@destroy"); 
	Route::get("administrador/items/{id}edit","ItemController@edit");
	route::get("administrador/items/update/{id}","ItemController@update");
    Route::get("administrador/items/delete/{id}","ItemController@destroy");
    //Route::get("administrador/Opciones/{id}edit","OpcionesActiController@edit");//edit detalle
	route::get("administrador/Opciones/update/{id}","OpcionController@update");//update detalle
	Route::get("administrador/Opciones/delete/{id}","OpcionController@destroy");//eliminar detalles

	Route::view("AnexoActi/remision","Administrador.AnexoActi.remision");
	Route::view("AnexoActi/debito","Administrador.AnexoActi.debito");
	Route::view("AnexoActi/credito","Administrador.AnexoActi.credito");
	Route::view("AnexoActi/caja","Administrador.AnexoActi.caja");
	Route::view("AnexoActi/salida","Administrador.AnexoActi.salida");
	Route::view("AnexoActi/nota","Administrador.AnexoActi.nota");
	Route::view("AnexoActi/cajamenor","Administrador.AnexoActi.cajamenor");
	Route::view("AnexoActi/diario","Administrador.AnexoActi.diario");
	Route::view("AnexoActi/egreso","Administrador.AnexoActi.egreso");
	Route::view("AnexoActi/ingreso","Administrador.AnexoActi.ingreso");
	Route::view("AnexoActi/formulario","Administrador.AnexoActi.formulario");

    Route::resource("administrador/users","UserController");
    Route::resource("administrador/evaluacion","EvaluacionController");
	Route::resource("administrador/items","ItemController");
	Route::get("getOpciones","OpcionUsuarioController@getOpcion");
	Route::resource("opciones","OpcionUsuarioController");
//------------------endtocayo-------------------//
});

Route::group(["prefix"=>"u"],function(){//rutas para recuperar el acceso
	Route::get("recuperar_acceso","Auth\ResetPasswordController@index");
	Route::post("verificar_correo","Auth\ResetPasswordController@verify_email");
	Route::get("nueva_contraseña/{str}","Auth\ResetPasswordController@new_password");
	Route::post("update_password","Auth\ResetPasswordController@update");
});
//Route::get('/', 'HomeController@index');
//Route::resource('enviarmail','EmailController');

//Route::get("admin/resultado/getResultados/{id}","ResultadoController@getSublineas");
//Route::get("admin/resultado/edit/{id}","ResultadoController@edit");
/*Route::get('/', function () {
    return view('welcome');
});*/

