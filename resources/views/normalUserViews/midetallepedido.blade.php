@extends('layout/maintemaplate')

@section('title', 'Detalle de mi pedido')

@section('content')


<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">
      </th>
      <th class="th-sm">Producto
      </th>
      <th class="th-sm">Cantidad
      </th>
      <th class="th-sm">Unidad de medida
      </th>
      <th class="th-sm">Precio total
      </th>
    </tr>
  </thead>
  <tbody>

    @foreach ( $detallePedidos as $detallePedido)
    <tr>
      <td></td>
      <td>{{$detallePedido->nombre}}</td>
      <td>{{$detallePedido->cantidadReserva}}</td>
      <td>Kilo</td>
      <td>$ {{$detallePedido->precio}}</td>
    </tr>
    @endforeach



  </tbody>

</table>


@endsection