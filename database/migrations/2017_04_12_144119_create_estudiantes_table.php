<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('cedula', 12)->unique();

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');

            $table->integer('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');

            $table->integer('regional_id')->unsigned();
            $table->foreign('regional_id')->references('id')->on('regionals');

            $table->enum('genero', ['Masculino', 'Femenino', 'Indefinido']);
            $table->string('pensum', 5);
            $table->string('semestre', 2);
            $table->string('correo_principal', 100);
            $table->string('correo_institucional', 100);
            $table->string('celular', 12);
            $table->string('telefono', 12);
            $table->date('fecha_nacimiento');
            $table->string('expedicion_documento', 50);
            $table->string('nacionalidad', 50);
            $table->string('wp', 12);
            $table->string('skype', 50);
            $table->string('linkedin', 50);
            $table->string('twitter', 50);
            $table->string('estado_civil', 50);
            $table->string('estado', 100);
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
        Schema::drop('estudiantes');
    }
}
