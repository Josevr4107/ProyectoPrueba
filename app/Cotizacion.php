<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table='cotizacions';
    protected $fillable=
    ['observaciones','preciototal','tiempoentrega','validezoferta','estado'=>'1'];

    public function clasificador()
    {
        return $this->belongsTo('App\Clasificador');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    

    public function registrado_user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}

