<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelIntegrasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_integras', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id');
            $table->integer('estudiante_id');
            $table->integer('user_id');
            $table->boolean('boo_ponente');
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
        Schema::drop('rel_integras');
    }
}
