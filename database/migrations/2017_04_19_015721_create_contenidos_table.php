<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function(Blueprint $table) {
            $table->increments('id');
           
            $table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos');

            $table->text('a1');
            $table->text('a2');
            $table->text('a3');
            $table->text('a4');
            $table->text('a5');
            $table->text('a6');
            $table->text('a7');
            $table->text('a8');
            $table->text('a9');
            $table->text('a10');
            $table->text('a11');
            $table->text('a12');
            $table->text('a13');
            $table->text('a14');
            $table->text('a15');
            $table->text('a16');
            $table->text('a17');
            $table->text('a18');
            $table->text('a19');
            $table->text('a20');
            $table->text('a21');
            $table->text('a22');
            $table->text('a23');
            $table->text('a24');
            $table->text('a25');
            $table->text('a26');
            $table->text('a27');
            $table->text('a28');
            $table->text('a29');
            $table->text('a30');
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
        Schema::drop('contenidos');
    }
}
