<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestudiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('testudia', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('testudiantes');

            $table->integer('id_programa')->unsigned();
            $table->foreign('id_programa')->references('id')->on('tprogramas');
            
            $table->date('fecha_matricula');
            $table->date('fecha_finalizacion');
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_programa', 'id_academico','fecha_matricula'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('testudia');
    }
}
