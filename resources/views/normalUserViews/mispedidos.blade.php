@extends('layout/maintemaplate')

@section('title', 'Mis Pedidos')

@section('content')
<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Precio total</th>
                <th>¿Domicilio?</th>
                <th>Estado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservas as $reserva)
              <tr class="text-center">
                <td class="direccion">{{ $reserva->direccion }}</td>
                <td class="telefono">{{ $reserva->telefono }}</td>
                <td class="fecha">{{ $reserva->fecha }}</td>
                <td class="precio">$ {{ $reserva->precio_total }}</td>
                <td class="domicilio">{{ $reserva->domicilio }}</td>
                <td class="reserva">{{ $reserva->estado }}</td>
                <td class="action"><a class="btn btn-info" href="{{ url('/pedidosusuario/'.$reserva->id) }}">Ver productos</a> </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
@endsection