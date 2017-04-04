<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsemillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsemilleros', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('sigla', 10);
            $table->date('fecha_vinculacion');
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
         Schema::drop('tsemilleros');
    }
}
