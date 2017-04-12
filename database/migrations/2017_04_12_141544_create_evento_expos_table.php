<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventoExposTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_expos', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('grupojurado_id')->unsigned();
            $table->foreign('grupojurado_id')->references('id')->on('grupo_jurados');

            $table->string('nombre', 100);
            $table->string('direccion', 100);
            $table->text('informacion');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('evento_expos');
    }
}
