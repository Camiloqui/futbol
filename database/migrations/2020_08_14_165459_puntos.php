<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Puntos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GrupoEquipos')->nullable();
            $table->integer('Equipos')->nullable();
            $table->integer('Puntos')->nullable();
            $table->integer('Goles')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('equipos');

    }
}
