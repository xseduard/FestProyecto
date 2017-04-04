<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfreceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tofrece', function(Blueprint $table) {
            
            $table->integer('id_ponencia')->unsigned();
            $table->foreign('id_ponencia')->references('id')->on('tponencias');
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('tacademicos');

            $table->date('fecha');
            $table->timestamps();
            $table->softDeletes();

            $table->primary(array('id_ponencia', 'id_academico','fecha'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('tofrece');
    }
}
