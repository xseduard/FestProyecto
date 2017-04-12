<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprogramasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('modalidad');

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');

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
        Schema::drop('programas');
    }
}
