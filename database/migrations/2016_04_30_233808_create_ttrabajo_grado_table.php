<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTtrabajoGradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttrabajo_grados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('nivel');
            $table->string('periodo', 8);
            $table->string('observaciones');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('id_programa')->unsigned();
            $table->foreign('id_programa')->references('id')->on('tprogramas');

            $table->integer('id_director')->unsigned();
            $table->foreign('id_director')->references('id')->on('tdocentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ttrabajo_grados');
    }
}
