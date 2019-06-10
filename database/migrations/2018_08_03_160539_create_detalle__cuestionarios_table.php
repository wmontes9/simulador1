<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cuestionario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_cuestionario")->unsigned()->nullable();
            $table->integer("id_competencia")->unsigned()->nullable();
            $table->string("fecha_cuestionario");
            $table->enum("estado",["activo","inactivo"])->default("activo");
            $table->string("duracion");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_cuestionario")->references("id")->on("cuestionario")->delete("cascade");
            $table->foreign("id_competencia")->references("id")->on("competencia")->delete("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_cuestionario');
    }
}
