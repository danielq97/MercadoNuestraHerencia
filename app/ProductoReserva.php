<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoReserva extends Model
{
    //
     //Método para obtener la reserva de un productoReserva
     public function reservas(){
        return $this->belongsTo(Reserva::class);
    }
}
