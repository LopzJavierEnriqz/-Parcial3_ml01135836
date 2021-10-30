<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre0', 12)->nullable();
            $table->string('nombre1', 12)->nullable();
            $table->string('apellido0', 12)->nullable();
            $table->string('apellido1', 12)->nullable();
            $table->string('carnet',10) ->nullable();
            $table->string('fech_nac', 10)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('genero', 1)->nullable();
            $table->integer('telefono')->length(8)->nullable();
            $table->string('email');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}