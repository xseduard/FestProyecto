<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuradosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('cedula', 12)->unique();
            
            $table->integer('grupojurado_id')->unsigned();
            $table->foreign('grupojurado_id')->references('id')->on('grupo_investigacions');

            $table->integer('user_id')->unsigned();

            $table->integer('linea_investigacion_id')->unsigned();
            $table->foreign('linea_investigacion_id')->references('id')->on('linea_investigacions');

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');

            $table->string('celular', 12);
            $table->string('direccion', 100);
            $table->string('correo');
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
        Schema::drop('jurados');
    }
}
