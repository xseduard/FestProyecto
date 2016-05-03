<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               Schema::create('testudiantes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('area_interes', 30);
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
        Schema::drop('testudiantes');
    }
}
