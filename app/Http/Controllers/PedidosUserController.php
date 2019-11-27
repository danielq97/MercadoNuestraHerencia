<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\ProductoReserva;
use Auth;

/**
 * Controlador encargado de todo lo relacionado con los pedidos del cliente.
 */
class PedidosUserController extends Controller
{
   /**
    * Mostrar pedidos realizados por el usuario
    */
    public function index() {
      $user = Auth::user();
      $reservas['reservas'] = Reserva::where([['usuario_id','=',$user->id],['estado','=',"A"]])->get();
        return view("/normalUserViews/mispedidos",$reservas);
     }
     public function create() {
        echo 'create';
     }
     public function store(Request $request) {
        echo 'store';
     }

     /**
      * Mostrar detalle de un pedido realizado por un usuario
      */
     public function show($id) {
      $detallePedidos = Reserva::find($id)->producto_reservas;    
      $detallePedidos = ProductoReserva::
  join('productos', 'productos.id', '=', 'producto_reservas.idProducto')->where('producto_reservas.reserva_id', '=', $id)->get();
 // return response()->json($detallePedidos);      
     return view ('/normalUserViews/midetallepedido',compact('detallePedidos'));
        
     }
     public function edit($id) {
        echo 'edit';
     }
     public function update(Request $request, $id) {
        echo 'update';
     }
     public function destroy($id) {
        echo 'destroy';
     }
}
