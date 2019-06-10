<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_anexo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_competencia")->unsigned()->nullable();
            $table->string("url_grupo");
            $table->rememberToken();
            $table->timestamps();

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
        Schema::dropIfExists('detalle_anexo');
    }
}
