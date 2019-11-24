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
                <th>{{ $reserva->direccion }}</th>
                <th>{{ $reserva->telefono }}</th>
                <th>{{ $reserva->fecha }}</th>
                <th>{{ $reserva->precio_total }}</th>
                <th>{{ $reserva->domicilio }}</th>
                <th>{{ $reserva->estado }}</th>
                <th class="action">Ver productos</th>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
@endsection