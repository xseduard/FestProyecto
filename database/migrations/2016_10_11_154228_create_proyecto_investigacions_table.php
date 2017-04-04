<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectoInvestigacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_investigacions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('pais');
            $table->integer('nodo');
            $table->integer('universidad');
            $table->integer('semillero');
            $table->integer('ponente');
            $table->string('categoria');
            $table->string('titulo');
            $table->string('introduccion');
            $table->string('problema_justificacion');
            $table->string('objetivo_general');
            $table->string('objetivo_especifico');
            $table->string('referente_teorico');
            $table->string('metodologia');
            $table->string('conclusion');
            $table->string('bibliografia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyecto_investigacions');
    }
}
