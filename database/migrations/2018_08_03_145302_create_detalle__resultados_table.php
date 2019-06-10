<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_resultado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_caso")->unsigned();
            $table->integer("id_resultado")->unsigned()->nullable();
            $table->integer("id_tipo_resultado")->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_caso")->references("id")->on("caso")->delete("cascade");
            $table->foreign("id_resultado")->references("id")->on("resultado")->delete("cascade");
            $table->foreign("id_tipo_resultado")->references("id")->on("tiporesultado")->delete("cascade"); 
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_resultados');
    }
}
