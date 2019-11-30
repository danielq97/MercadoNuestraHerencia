@extends('layout/maintemaplate')

@section('title', 'Detalle de producto')

@section('content')

<body>

    <form method="post" action="{{url('/reserva/'.$producto->id)}}">
        {{csrf_field()}}

        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 ftco-animate">
                        <a href="images/product-1.jpg" class="image-popup"><img
                                src="{{asset('storage').'/'.$producto->foto}}" class="img-fluid"></a>
                    </div>
                    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                        <h3>{{ $producto->nombre }}</h3>

                        <p class="price"><span>Precio por {{ $unidadmedida->nombre }}: <strong>$
                                    {{ $producto->precio }}</strong> </span></p>
                        <p>{{ $producto->descripcion }}</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group d-flex">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="input-group col-md-6 d-flex mb-3">

                                <input type="number" id="cantidad" name="cantidad" class="form-control input-number"
                                    value="0" min="0" max="{{$producto->cantidad}}">

                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <p style="color: #000;">{{ $producto->cantidad }} {{ $unidadmedida->nombre }} disponible
                                    en bodega</p>
                            </div>
                        </div>
                        <input type="submit"  class="btn btn-success" onclick="changeCart(this)" value="Agregar al carrito">
                    </div>
                </div>
            </div>
        </section>
        </form>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Productos</span>
                        <h2 class="mb-4">Productos relacionados</h2>
                        <p>Estos son algunos de nuestros productos relacionados que podrias añadir a tu pedido</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($productosPorCategoria['productosPorCategoria'] as $producto)

                    <div class="column">
                        <div class="contenedor_imagen_texto">
                            <div class="imagen col-sm-4"><a href="{{url('/productoDetalle/'.$producto->id)}}"><img
                                        src="{{asset('storage').'/'.$producto->foto}}" width="150"></div>
                        </div>
                        <br><br>
                        <div class=row>
                            <p class="ml-sm-5 mr-3">{{$producto->nombre}}</p>
                            <a class="btn btn-info" href="{{ url('/productoDetalle/'.$producto->id) }}"> Ver producto <i class="far fa-eye"></i></a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <br>
        <br>

    

</body>
<script>
function changeCart(element){

   
    var cantidad = parseInt($('#cantidad').val());
 

 if(cantidad==0){
    alert("En el momento no está disponible este producto en la tienda");
 }
 else if(cantidad> $producto->cantidad || cantidad < $producto->cantidad ){

	
 }
else{
	 
	
  
	alert("Ha sido añadido su producto al carrito, puede seguir añadiendo productos o darle al carrito para continuar su pedido");
	
  
  
}

	
//	$('#precioIndividual').val(cantidad + 1);
}


</script>



@endsection