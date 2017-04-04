<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTproyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tproyectos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('id_director')->unsigned();
            $table->foreign('id_director')->references('id')->on('tdocentes');
            $table->integer('id_semillero')->unsigned();
            $table->foreign('id_semillero')->references('id')->on('tsemilleros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tproyectos');
    }
}
