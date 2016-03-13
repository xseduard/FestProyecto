<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidads', function(Blueprint $table) {
            $table->increments('id');
            $table->string('uni_nombre');
            $table->string('uni_direccion');
            $table->string('uni_ciudad');
            $table->string('uni_departamento');
            $table->integer('uni_codigo');
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
        Schema::drop('universidads');
    }
}
