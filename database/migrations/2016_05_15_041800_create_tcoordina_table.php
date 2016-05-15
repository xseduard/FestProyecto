<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcoordinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('tcoordina', function(Blueprint $table) {
            
            $table->integer('id_academico')->unsigned();
            $table->foreign('id_academico')->references('id')->on('tacademicos');

            $table->integer('id_grupo_investigacion')->unsigned();
            $table->foreign('id_grupo_investigacion')->references('id')->on('tgrupo_investigaciones');
            
            $table->timestamps();
            $table->softDeletes();

             $table->primary(array('id_grupo_investigacion', 'id_academico'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('tcoordina');
    }
}
