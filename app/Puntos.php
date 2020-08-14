<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntos extends Model
{
    //

    protected $fillable=['GrupoEquipos','Equipos','Puntos','Goles'];


    protected $table='Puntos';
}
