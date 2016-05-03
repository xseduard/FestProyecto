<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tdocentes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('formacion');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('tacademicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tdocentes');
    }
}
