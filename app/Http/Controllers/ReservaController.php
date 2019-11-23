<?php

namespace App\Http\Controllers;

use App\DetalleReserva;
use App\Producto;
use App\ProductoReserva;
use App\Reserva;
use Auth;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosProducto['productos'] = Producto::paginate(3 );
        return view('welcome',$datosProducto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idProducto,Request $request)
    {
        //

        

      // $cantidad = request()->except(['_token','_method']);
     

        //$productoReserva->save();

        $producto = Producto :: findOrFail($idProducto);
        
        $reserva = new Reserva();
        $reserva->usuario_id = Auth::user()->id;
        $reserva->fecha = now();

       // $respuesta = request()->except(['_token','_method']);
        $cantidadProd = $request->get('cantidad');

        $reserva->precio_total = (($producto->precio)*($cantidadProd));
        $reserva->domicilio = 'D';
        $reserva->save();


        

        $productoReserva = new ProductoReserva();
       
        $productoReserva->idProducto = $producto->id;        
        $productoReserva->precio = $producto->precio;        
        $productoReserva->cantidad = $cantidadProd;
        $productoReserva->reserva_id = $reserva->id;
        $productoReserva->save();


      

       return view ("about");
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        return view ('/carrito/formularioDatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
