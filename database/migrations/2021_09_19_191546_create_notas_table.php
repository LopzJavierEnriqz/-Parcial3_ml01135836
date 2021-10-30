<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota1')->nullable();
            $table->integer('nota2')->nullable();
            $table->integer('nota3')->nullable();
            $table->integer('nota4')->nullable();
            $table->integer('promedio')->nullable();
            $table->integer('parcial')->nullable();

            $table->integer('idcurso')->unsigned();
            $table->foreign('idcurso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('idalumno')->unsigned();
            $table->foreign('idalumno')->references('id')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('notas');
    }
}