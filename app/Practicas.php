<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practicas extends Model
{
	protected $table='practicas';
	protected $fillable=['titulo','url','descripcion','semestre','calificacion'];
	protected $guarded=['id'];
}
