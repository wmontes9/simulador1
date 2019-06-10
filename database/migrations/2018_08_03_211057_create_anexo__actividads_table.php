<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexoActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo_actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_actividad")->unsigned()->nullable();
            $table->string("url_anexo");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_actividad")->references("id")->on("actividad")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexo_actividad');
    }
}
