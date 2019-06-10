<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_competencia")->unsigned()->nullable();
            $table->integer("id_tipoconocimiento")->unsigned()->nullable();
            $table->text("descripcion");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_competencia")->references("id")->on("competencia")->delete("cascade");
            $table->foreign("id_tipoconocimiento")->references("id")->on("tipo_conocimiento")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conocimiento');
    }
}
