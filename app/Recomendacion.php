<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model
{
    protected $table='recomendacions';
    protected $fillable=['titulo','mensaje','url','imagen'];
    protected $guarded=['id'];
}
