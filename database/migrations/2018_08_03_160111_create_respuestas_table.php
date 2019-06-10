<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_pregunta")->unsigned()->nullable();
            $table->text("descripcion");
            $table->enum("validacion",["true","false"])->default("false");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_pregunta")->references("id")->on("pregunta")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta');
    }
}
