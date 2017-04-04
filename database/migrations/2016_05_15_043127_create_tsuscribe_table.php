<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsuscribeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('tsuscribe', function(Blueprint $table) {
            
            $table->integer('id_lineai')->unsigned();
            $table->foreign('id_lineai')->references('id')->on('tlineai');

            $table->integer('id_proyecto')->unsigned();
            $table->foreign('id_proyecto')->references('id')->on('tproyectos');


            $table->integer('id_programa')->unsigned();
            $table->foreign('id_programa')->references('id')->on('tprogramas');
            
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_programa', 'id_proyecto', 'id_lineai'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('tsuscribe');
    }
}