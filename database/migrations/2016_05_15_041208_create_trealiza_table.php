<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('trealiza', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('testudiantes');

            $table->integer('id_proyecto_aula')->unsigned();
            $table->foreign('id_proyecto_aula')->references('id')->on('tproyecto_aulas');
            
            $table->string('periodo',8);
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_proyecto_aula', 'id_academico','periodo'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('trealiza');
    }
}
