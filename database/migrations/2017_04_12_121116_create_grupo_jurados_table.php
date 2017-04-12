<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoJuradosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_jurados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 5);

            $table->integer('regional_id')->unsigned();
            $table->foreign('regional_id')->references('id')->on('regionals');
            
            $table->text('observaciones');
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
        Schema::drop('grupo_jurados');
    }
}
