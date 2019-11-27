<?php

namespace App\Http\Controllers;

use App\ProductoReserva;
use App\Reserva;
use Illuminate\Http\Request;

class PedidosDisponiblesController extends Controller
{


   public function __construct()
    {
        $this->middleware('admin');
    }


    public function index() {
      
        $reservas['reservas'] = Reserva::join('users','users.id','=','reservas.usuario_id')->where('estado','=',"A")->orWhere('estado','=',"C")->get();
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
   // return response()->json($detallePedidos);      
       return view ('/adminViews/detallepedido',compact('detallePedidos'));
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
