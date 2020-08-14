<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partidos extends Model
{
    //
    protected $fillable=['GrupoEquipo','Equipo'];


    protected $table='partidos';
}
