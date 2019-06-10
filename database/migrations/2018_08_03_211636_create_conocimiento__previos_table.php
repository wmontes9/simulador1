<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConocimientoPreviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimiento_previo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_cuestionario")->unsigned()->nullable();
            $table->integer("id_usuario")->unsigned()->nullable();
            $table->string("fecha");
            $table->string("calificacion");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_usuario")->references("id")->on("users")->delete("cascade");
            $table->foreign("id_cuestionario")->references("id")->on("cuestionario")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conocimiento_previo');
    }
}
