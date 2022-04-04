<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table='procesos';
    protected $fillable=
    ['tipotrabajo_id','nro','descripcion','tiempomin','estado'=>'1'];

    public function tipotrabajo(){
    
        return $this->belongsTo('App\Tipotrabajo');
    }   
     public function registrado_user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }


}

