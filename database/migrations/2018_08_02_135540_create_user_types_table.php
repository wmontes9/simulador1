<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_user")->unsigned();
            $table->integer("id_rol")->unsigned();
            $table->rememberToken();
            $table->timestamps();
            //
            $table->foreign("id_user")->references("id")->on("users")->delete("cascade");
            $table->foreign("id_rol")->references("id")->on("rol")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_type');
    }
}
