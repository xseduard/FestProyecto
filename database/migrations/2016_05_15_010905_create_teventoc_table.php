<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeventocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teventoc', function(Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15);
            $table->string('nombre');
            $table->string('descripcion');
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
        Schema::drop('teventoc');
    }
}
