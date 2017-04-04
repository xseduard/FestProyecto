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
            $table->string('nombre');
            $table->string('facultad');
            $table->string('grupo_de_investigacion');
            $table->date('fecha_de_creacion');
            $table->string('docente_asesor');
            $table->string('estudiante_lider');
            $table->string('programa');
            $table->integer('code_miembros');
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
