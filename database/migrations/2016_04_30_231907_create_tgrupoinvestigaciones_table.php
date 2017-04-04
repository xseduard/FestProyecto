<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgrupoinvestigacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               Schema::create('tgrupo_investigaciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('gruplac', 15);
            $table->string('categoria', 1);
            $table->date('fecha_creacion');
            $table->string('reconocido', 2);
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
         Schema::drop('tgrupo_investigaciones');
    }
}
