<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('pais', 50)->default('Colombia');
            $table->string('universidad', 150)->default('Corporacion Unificada Nacional de Educacion Superior (CUN)');

            $table->integer('regional_id')->unsigned();
            $table->foreign('regional_id')->references('id')->on('regionals');

            $table->integer('semillero_id')->unsigned();
            $table->foreign('semillero_id')->references('id')->on('semilleros');

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');

            $table->integer('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('estado_id')->unsigned()->default(1);;
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->integer('linea_id')->unsigned();
            $table->foreign('linea_id')->references('id')->on('linea_investigacions');

            $table->integer('grupojurado_id')->unsigned()->default(1);
            $table->foreign('grupojurado_id')->references('id')->on('grupo_jurados');

            $table->integer('evento_expo_id')->unsigned()->default(1);
            $table->foreign('evento_expo_id')->references('id')->on('evento_expos');

            $table->string('tipo', 100);
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('progreso_estimado', 3)->default(5);
            $table->boolean('boo_publicacion')->default(0);
            $table->text('detalles_publicacion');
            $table->boolean('boo_solicitud_revision')->default(0);
            $table->boolean('boo_contenido')->default(0);
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
        Schema::drop('proyectos');
    }
}
