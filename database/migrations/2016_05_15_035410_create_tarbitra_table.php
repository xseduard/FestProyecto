<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarbitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('tarbitra', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('tdocentes');

            $table->integer('id_trabajogrado')->unsigned();
            $table->foreign('id_trabajogrado')->references('id')->on('ttrabajo_grados');
            
            $table->date('fecha');
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_trabajogrado', 'id_academico','fecha'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('tarbitra');
    }
}
