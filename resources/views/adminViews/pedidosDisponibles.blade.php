@extends('layout/maintemaplate')

@section('title', 'Pedidos disponibles')

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
                <th>Usuario</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>

                @foreach ($reservas as $reserva)
              <tr class="text-center">
                <td class="addres">{{ $reserva->direccion }}</td>
                <td class="phone">{{ $reserva->telefono }}</td>
                <td class="date">{{ $reserva->fecha }}</td>
                <td class="totalprice">{{ $reserva->precio_total }}</td>
                <td class="domicilio">{{ $reserva->domicilio }}</td>
                <td class="status">{{ $reserva->estado }}</td>
                <td class="user">{{ $reserva->usuario_id }}</td>
                <td class="action"><a class="btn btn-info" href="{{ url('/detallereserva/'.$reserva->id) }}">Ver productos</a></td>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
@endsection