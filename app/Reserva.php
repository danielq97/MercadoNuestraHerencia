<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    //Atributos por defecto al crear una reserva
    protected $attributes = [
        'telefono' => "n",
        'direccion' => "n",          
        'estado' => "I",
        'domicilio' => "D",
    ];

    //Método para obtener todos los detalles de una reserva
    public function producto_reservas(){
        return $this->hasMany(ProductoReserva::class);
    }

    public function setDateAttribute( $value ) {
        $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
      }
}
