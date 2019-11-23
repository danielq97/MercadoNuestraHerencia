@extends('layout/maintemaplate')

@section('title', 'Detalle del pedido')

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


      <tr>
        <td></td>
        <td>Manzana</td>
        <td>12</td>
        <td>Kilo</td>
        <td>10000</td>
      </tr>
    </tbody>
    <tfoot>
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
    </tfoot>
  </table>

  









@endsection