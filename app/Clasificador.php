<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificador extends Model
{
    protected $table='clasificadors';
    protected $fillable=
    ['nombre','descripcion','estado'=>'1'];
}