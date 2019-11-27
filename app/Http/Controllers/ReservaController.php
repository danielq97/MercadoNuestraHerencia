<?php

namespace App\Http\Controllers;


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
        //Se obtiene el usuario logueado
        $user = Auth::user();

        if (is_null($user)) {
            return view("/auth/login");
        } else {

            //Se comprueba que tenga al menos reserva activa
            if ($user->reservaActiva_id != null) {
                $detallePedidos = Reserva::find($user->reservaActiva_id)->producto_reservas;
                $reserva = Reserva::findOrFail($user->reservaActiva_id);
                $detallePedidos = ProductoReserva::join('productos', 'productos.id', '=', 'producto_reservas.idProducto')->where('producto_reservas.reserva_id', '=', $user->reservaActiva_id)->get();
                //$reserva = Reserva :: find($user->reservaActiva_id);
                return view('carrito/pedido', compact('detallePedidos','reserva'));
            }
            //Si no tiene reserva activa se da un aviso
            else if ($user->reservaActiva_id ==null) {
                return redirect("/productos");
            }
        }
    }
    //Paso a formulario de datos desde el carro
    public function goDatos(Request $request)
    {
        //Se obtiene el usuario logueado
        $user = Auth::user();
        $reserva = Reserva::findOrFail($user->reservaActiva_id);

       // return response()->json($request);
        return view('/carrito/formularioDatos', compact('reserva'));
    }


    public function saveDatos(Request $request)
    {
        //Se obtiene el usuario logueado
        $user = Auth::user();
        $reserva = Reserva::findOrFail($user->reservaActiva_id);
        //actualizo por los valores recibidos
        $reserva->direccion = $request->get('direccion');        
        $reserva->telefono = $request->get('telefono');
        //$domicilio = $request->get('domicilio');
        $reserva->domicilio =$request->get('domicilio') ;
        $reserva->estado = 'A';

        $user->reservaActiva_id = null;
        $user-> save();

        $reserva->save();

        //return response()->json($domicilio);
        return view('/about');
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
    public function store($idProducto, Request $request)
    {
        //


        //Se obtiene el usuario logueado
        $user = Auth::user();

        if (is_null($user)) {
            return '<script type="text/javascript">alert("Debes iniciar sesión o registrarte en la plataforma primero!");</script>';
        } else {
            //En caso de que no tenga reserva activa
            if ($user->reservaActiva_id == null) {
                $producto = Producto::findOrFail($idProducto);

                $reserva = new Reserva();
                $reserva->usuario_id = Auth::user()->id;
                $reserva->fecha = now();

                // $respuesta = request()->except(['_token','_method']);
                $cantidadProd = $request->get('cantidad');

                $reserva->precio_total = (($producto->precio) * ($cantidadProd));
                $reserva->save();

                $productoReserva = new ProductoReserva();

                $productoReserva->idProducto = $producto->id;
                $productoReserva->precio = $producto->precio;
                $productoReserva->cantidadReserva = $cantidadProd;
                $productoReserva->reserva_id = $reserva->id;
                $productoReserva->save();


                $user->reservaActiva_id = $reserva->id;
                $user->save();


                return redirect("/productos");
            }
            //En caso de que tenga reserva activa
            else if ($user->reservaActiva_id != null) {

                $producto = Producto::findOrFail($idProducto);

                $reserva = Reserva::findOrFail($user->reservaActiva_id);
                //$reserva->usuario_id = Auth::user()->id;
                //$reserva->fecha = now();

                // $respuesta = request()->except(['_token','_method']);
                $cantidadProd = $request->get('cantidad');

                //Recupero el precio total anterior que tenía la reserva

                $precioAnterior = $reserva->precio_total;
                $reserva->precio_total = $precioAnterior + (($producto->precio) * ($cantidadProd));
                $reserva->save();




                $productoReserva = new ProductoReserva();

                $productoReserva->idProducto = $producto->id;
                $productoReserva->precio = $producto->precio;
                $productoReserva->cantidadReserva = $cantidadProd;
                $productoReserva->reserva_id = $reserva->id;
                $productoReserva->save();


                $user->save();


                return redirect("/productos");
            }
        }
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
     * Este método usarlo para finalizar pedidos
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    { }

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

    public function showHome()
    {
        $datosProducto['productos'] = Producto::paginate(3);
        return view('welcome', $datosProducto);
    }
}
