<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReserva extends Model
{
    //
    //Método para obtener la reserva de un detalle
    public function getReserva(){
        return $this->belongsTo('App\Reserva');
    }

    //Método para obtener el producto de un detalle
    public function getProducto(){
        return $this -> belongsTo(('App\Producto'));
    }

}
