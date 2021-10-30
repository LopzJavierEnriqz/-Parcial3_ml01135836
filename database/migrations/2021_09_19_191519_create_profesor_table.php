<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre0',10)->nullable();
            $table->string('nombre1',10)->nullable();
            $table->string('apellido0',10)->nullable();
            $table->string('apellido1',10)->nullable();
            $table->string('carnet',10) ->nullable();
            $table->string('dui')->length(10)->nullable();
            $table->string('genero',1)->nullable();
            $table->integer('telefono')->length(8)->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('profesor');
    }
}