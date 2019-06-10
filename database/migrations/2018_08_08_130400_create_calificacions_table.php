<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_actividad")->unsigned()->nullable();
            $table->integer("id_item")->unsigned()->nullable();
            $table->integer("id_usuario")->unsigned()->nullable();
            $table->string("fecha");
            $table->string("calificacion");
            $table->text("observaciones");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_actividad")->references("id")->on("actividad")->delete("cascade");
            $table->foreign("id_item")->references("id")->on("item")->delete("cascade");
            $table->foreign("id_usuario")->references("id")->on("users")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion');
    }
}
