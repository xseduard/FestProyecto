<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTproyectoAulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tproyecto_aulas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 120);
            $table->string('periodo', 8);
            $table->integer('nivel');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('tdocentes');
            $table->integer('id_programa')->unsigned();
            $table->foreign('id_programa')->references('id')->on('tprogramas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tproyecto_aulas');
    }
}
