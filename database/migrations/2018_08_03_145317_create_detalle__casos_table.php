<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_caso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_caso")->unsigned()->nullable();
            $table->text("proposito");
            $table->text("audiencia");
            $table->text("enfoque");
            $table->text("metodo");
            $table->text("fecha_elaboracion");
            $table->enum("estado",["activo","inactivo"])->default("activo");
            $table->text("tiempo_promedio");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_caso")->references("id")->on("caso")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_caso');
    }
}
