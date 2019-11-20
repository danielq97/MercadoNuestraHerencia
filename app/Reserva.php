<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //

    protected $attributes = [
        'estado' => "I",
    ];

    //Método para obtener todos los detalles de una reserva
    public function getDetails(){
        return $this->hasMany('App\DetalleReserva');
    }
}
