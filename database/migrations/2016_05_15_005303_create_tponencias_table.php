<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTponenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('tponencias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('periodo', 15);
            $table->date('fecha');
            $table->string('pais', 50);
            $table->string('ciudad', 50);
            $table->string('institucion');
            $table->string('pagina', 120);
            $table->timestamps();
            $table->softDeletes();

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
            Schema::drop('tponencias');
    }
}
