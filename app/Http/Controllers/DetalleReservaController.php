<?php

namespace App\Http\Controllers;

use App\DetalleReserva;
use App\Producto;
use Illuminate\Http\Request;

class DetalleReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosProducto['productos'] = Producto::paginate(3);
        return view('carrito/pedido',$datosProducto);
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleReserva $detalleReserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleReserva $detalleReserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleReserva $detalleReserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleReserva $detalleReserva)
    {
        //
    }
}
