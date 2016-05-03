<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Createttrabajo_gradosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttrabajo_grados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('nivel');
            $table->string('periodo', 8);
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
        Schema::drop('ttrabajo_grados');
    }
}
