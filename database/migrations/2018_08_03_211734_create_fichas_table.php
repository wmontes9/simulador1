<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_programa")->unsigned()->nullable();
            $table->string("codigo");
            $table->string("fecha_inicio");
            $table->string("fecha_fin");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_programa")->references("id")->on("programa")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha');
    }
}
