<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoInvestigacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_investigacions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('año_formacion', 4);
            $table->string('gran_area', 100);
            $table->string('area_conocimiento', 100);
            $table->string('cedula_primer_lider', 12);
            $table->string('nombre_primer_lider', 100);
            $table->string('cedula_segundo_lider', 12);
            $table->string('nombre_segundo_lider', 100);
            $table->string('grupLAC', 50);
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
        Schema::drop('grupo_investigacions');
    }
}
