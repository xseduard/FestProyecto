<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintegraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('tintegra', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('testudiantes');

            $table->integer('id_semillero')->unsigned();
            $table->foreign('id_semillero')->references('id')->on('tsemilleros');
            
            $table->string('periodo', 8);
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_semillero', 'id_academico','periodo'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('tintegra');
    }
}
