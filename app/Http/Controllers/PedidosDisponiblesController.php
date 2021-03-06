<?php

namespace App\Http\Controllers;

use App\ProductoReserva;
use App\Reserva;
use Illuminate\Http\Request;

class PedidosDisponiblesController extends Controller
{


   public function __construct()
    {
      $this->middleware('auth');
        $this->middleware('admin');
    }


    public function index() {
      
        $reservas['reservas'] = Reserva::join('users','users.id','=','reservas.usuario_id')->select('reservas.id','reservas.direccion','reservas.telefono','reservas.fecha','reservas.precio_total','reservas.domicilio','reservas.estado','users.name')->where('estado','=',"A")->orWhere('estado','=',"C")->get();
        return view('/adminViews/pedidosDisponibles', $reservas);
     }
     public function create() {
        echo 'create';
     }
     public function store(Request $request) {
        echo 'store';
     }
     public function show($id) {
        $detallePedidos = Reserva::find($id)->producto_reservas;    
        $detallePedidos = ProductoReserva::
    join('productos', 'productos.id', '=', 'producto_reservas.idProducto')->where('producto_reservas.reserva_id', '=', $id)->get();
    //return response()->json($id);      
       return view ('/adminViews/detallepedido',compact('detallePedidos'));
     }
     public function edit($id) {
        echo 'edit';
     }

     //actualizar estado del pedido 1.Completado
     public function update($id) {
      $detallePedidos = Reserva::findOrFail($id);
      $detallePedidos->estado = "C";
      $detallePedidos->save();
      return redirect('/pedidosDisponibles');
     }
     public function destroy($id) {
        echo 'destroy';
     }
}
