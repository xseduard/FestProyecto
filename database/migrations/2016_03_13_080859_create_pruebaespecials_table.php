<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePruebaespecialsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebaespecials', function(Blueprint $table) {
            $table->increments('id');
            $table->string('textouno');
            $table->string('texto_dos');
            $table->string('texto_tres');
            $table->integer('numero_uno');
            $table->integer('numero_dos');
            $table->date('fecha');
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
        Schema::drop('pruebaespecials');
    }
}
