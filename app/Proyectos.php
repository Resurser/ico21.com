<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table='proyectos';
    protected $fillable=['titulo','descripcion','url','semestre','calificacion'];
    protected $guarded=['id'];
}
