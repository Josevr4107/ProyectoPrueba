<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipotrabajo extends Model
{
    protected $table='tipotrabajos';
    protected $fillable=
    ['codigo','nombre','descripcion','estado'=>'1'];



    public function procesos(){
        return $this->hasMany('App\Proceso');   
    }

}
