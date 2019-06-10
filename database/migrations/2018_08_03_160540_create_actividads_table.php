<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_resultado")->unsigned()->nullable();
            $table->text("descripcion");
            $table->enum("estado",["activo","inactivo"])->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_resultado")->references("id")->on("resultado")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad');
    }
}
