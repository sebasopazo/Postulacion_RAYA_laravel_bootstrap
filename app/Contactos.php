<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $fillable = ['nombre', 'rut', 'telefono', 'direccion'];
}
