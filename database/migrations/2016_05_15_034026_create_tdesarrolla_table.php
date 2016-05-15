<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdesarrollaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('tdesarrolla', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('testudiantes');

            $table->integer('id_trabajogrado')->unsigned();
            $table->foreign('id_trabajogrado')->references('id')->on('ttrabajo_grados');
            
            $table->string('periodo', 8);
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_trabajogrado', 'id_academico','periodo'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('tdesarrolla');
    }
}
