<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemillerosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semilleros', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
           
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('users');

            $table->integer('coordinador_id');

            $table->integer('estudiante_lider_id')->unsigned();
            $table->foreign('estudiante_lider_id')->references('id')->on('estudiantes');

            $table->integer('regional_id')->unsigned();
            $table->foreign('regional_id')->references('id')->on('regionals');

            $table->integer('grupo_investigacion_id')->unsigned();
            $table->foreign('grupo_investigacion_id')->references('id')->on('grupo_investigacions');

            $table->text('informacion');
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
        Schema::drop('semilleros');
    }
}
