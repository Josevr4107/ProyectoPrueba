<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $fillable=
    ['nombre','cinit','direccion','cel1','cel2','correo','estado'=>'1'];

    public function cotizaciones(){
        
        return $this->hasMany('App\Cotizacion');
    }
}

