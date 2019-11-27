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

                @if($reserva->domicilio =='D')
                <td class="domicilio">Domicilio</td>
                @elseif($reserva->domicilio =='T')
                <td class="domicilio">Recoger en tienda</td>
                @endif
                @if($reserva->estado =='A')
                <td class="reserva">Activo</td>
                @elseif($reserva->estado =='C')
                <td class="reserva">Completado</td>
                @endif
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