<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_tipo_documento")->unsigned()->nullable();
            $table->string('name');
            $table->string('apellido');
            $table->string('documento')->unique();
            $table->string('password');
            $table->enum("estado",["activo","inactivo"])->default("activo");
            $table->string('telefono')->nullable();
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_tipo_documento")->references("id")->on("tipo_documento")->delete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
