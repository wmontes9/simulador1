<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ficha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_ficha")->unsigned()->nullable();
            $table->integer("id_user")->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_ficha")->references("id")->on("ficha")->delete("cascade");
            $table->foreign("id_user")->references("id")->on("users")->delete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__ficha');
    }
}
