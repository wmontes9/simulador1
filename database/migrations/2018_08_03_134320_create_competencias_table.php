<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_programa")->unsigned()->nullable();
            $table->string("codigo",10)->nullable();
            $table->text("descripcion");
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
        Schema::dropIfExists('competencia');
    }
}
