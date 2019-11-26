@extends('layout/maintemaplate')

@section('title', 'Pedido')

@section('content')
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
		<tbody>
			@foreach($detallePedidos as $producto)
			<tr class="text-center">
				

				<td class="image-prod"><img src="{{asset('storage').'/'.$producto->foto}}" width="150" height="150">



<td class="product-name">
	<h3>{{$producto->nombre}}</h3>
	<p>{{$producto->descripcion}}</p>
</td>

<td class="price" id="precioUnidad">${{$producto->precio}}</td>

<td class="quantity">
	<div class="input-group mb-3">
		<input onchange="changePrice(this)"  type="number" name="cantidad" id="cantidad" class="hola"
			value="{{$producto->cantidadReserva}}" min="1" max="{{$producto->cantidad}}">
	</div>
</td>


</tr><!-- END TR-->
@endforeach
</tbody>
</table>
</div>





<div align="right" >
	<h6 > Precio Total: </h6>
	<p class="mr-4" id="precioTotal">  {{$reserva->precio_total}}</p>
</div>

<div align="right">
	<p><a href="/datosContacto" class="btn btn-primary py-3 px-4 mr-4">Continuar pedido</a></p>


</div>

<script>
function changePrice(element){
	
    var cantidad = element.value;
	var precioUnidad =  document.getElementById('precioUnidad').innerText;
    //alert(precioUnidad);


	document.getElementById("precioTotal").innerHTML = 4 + cantidad;

	
//	$('#precioIndividual').val(cantidad + 1);
}
</script>









@endsection