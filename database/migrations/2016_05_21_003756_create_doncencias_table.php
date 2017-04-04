<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoncenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doncencias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('Cedula');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Facultad');
            $table->integer('Cargo');
            $table->string('Especialidad');
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
        Schema::drop('doncencias');
    }
}
