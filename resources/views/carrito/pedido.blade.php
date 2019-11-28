@extends('layout/maintemaplate')

@section('title', 'Pedido')

@section('content')


<form method="get" action="{{url('/datosContacto')}}" >
{{csrf_field()}}
<div class="cart-list">
	<table class="table">
		<thead class="thead-primary">
			<tr class="text-center">
				
				<th>&nbsp;</th>
				<th>Producto</th>
				<th>Precio x unidad</th>
				<th>Cantidad</th>				
			</tr>
		</thead>
		<tbody id="ajuste">
			@foreach($detallePedidos as $producto)
			<tr class="text-center">
				

				<td class="image-prod"><img src="{{asset('storage').'/'.$producto->foto}}" width="100" height="100">



<td class="product-name">
	<h3>{{$producto->nombre}}</h3>
	<p>{{$producto->descripcion}}</p>
</td>

<td class="price" id="precioUnidad">$ {{$producto->precio}}</td>

<td class="quantity">
	
		<input onchange="changePrice(this)"  type="number" name="cantidad" id="cantidad" class="quantity"
			value="{{$producto->cantidadReserva}}" min="1" max="{{$producto->cantidad}}" disabled>
	
</td>


</tr><!-- END TR-->
@endforeach
</tbody>
</table>
</div>





<div  class="col-12" align="right" >
	
	<h6 style="margin-right:200px" class="col-md-4"> Precio Total: </h6>
	<p style="margin-right:200px" class="col-md-4" id="precio_total"> $ {{$reserva->precio_total}}</p>

</div>

<div align="right">
<input class="btn btn-success" style="margin-right:200px" type="submit" value="Continuar pedido">



</div>
</form>
<script>
function changePrice(element){




	  var filas = $("#ajuste").find("tr"); //devulve las filas del body de la tabla
	  var resultado = 0;
	for(i=0; i<filas.length; i++){ //Recorre las filas 1 a 1
		var celdas = $(filas[i]).find("td"); //devolverá las celdas de una fila
		
		precioUnidad = $(celdas[2]).text();
		cantidad=  $($(celdas[3]).children("input")[0]).val();
		
		
    resultado += parseInt(precioUnidad)*parseInt(cantidad);
	}
	
	
  
	$('#precio_total').text("$ " + resultado);    
	
  

	
//	$('#precioIndividual').val(cantidad + 1);
}


</script>









@endsection