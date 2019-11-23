@extends('layout/maintemaplate')

@section('title', 'Pedido')

@section('content')
<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Producto</th>
						        <th>Precio</th>
						        <th>Cantidad</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                                @foreach($detallePedidos as $producto)
						      <tr class="text-center">
						        <td class="product-remove"></td>
						        
						        <td class="image-prod"><img src="{{asset('storage').'/'.$producto->foto}}" width="150" height="150"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{$producto->nombre}}</h3>
						        	<p>{{$producto->descripcion}}</p>
						        </td>
						        
						        <td class="price">${{$producto->precio}}</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input width="100" type="number" name="quantity" class="quantity form-control input-number" value="{{$producto->cantidadReserva}}" min="1" max="{{$producto->cantidad}}">
					          	</div>
					          </td>
						        
						        <td class="total">$4.90</td>
						      </tr><!-- END TR-->
                    @endforeach
						    </tbody>
						  </table>
</div>
                      
                      <br>
                      <div align="right">
					<p><a href="/datosContacto"class="btn btn-primary py-3 px-4 mr-4">Continuar pedido</a></p>


                      </div>

               

                     

                    

                      

@endsection