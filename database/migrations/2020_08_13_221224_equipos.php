<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EquipoA');
            $table->string('EquipoB');
            $table->string('EquipoC');
            $table->string('EquipoD');
            $table->integer('PuntosA')->nullable();
            $table->integer('PuntosB')->nullable();
            $table->integer('PuntosC')->nullable();
            $table->integer('PuntosD')->nullable();
            $table->integer('GolesA')->nullable();
            $table->integer('GolesB')->nullable();
            $table->integer('GolesC')->nullable();
            $table->integer('GolesD')->nullable();
            $table->timestamp('updated_at');

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
