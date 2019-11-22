<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoReserva extends Model
{
    //
     //Método para obtener la reserva de un productoReserva
     public function getReserva(){
        return $this->belongsTo('App\Reserva');
    }
}
