<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_detalle_anexo")->unsigned()->nullable();
            $table->string("nombre");
            $table->string("url_anexo");
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("id_detalle_anexo")->references("id")->on("detalle_anexo")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexo');
    }
}
