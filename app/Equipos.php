<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    //
    protected $fillable=['EquipoA','EquipoB','EquipoC','EquipoD','PuntosA','PuntosB','PuntosC','PuntosD','GolesA','GolesB','GolesC','GolesD'];


    protected $table='equipos';
}
