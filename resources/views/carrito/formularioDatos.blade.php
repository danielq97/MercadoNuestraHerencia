@extends('layout/maintemaplate')

@section('title', 'Datos de contacto')

@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 ftco-animate">
        <form method="post" action="{{url('/datosContactoSave')}}" class="billing-form">
          @csrf
          <h3 class="mb-4 billing-heading">Detalles de facturación</h3>
          <div class="row align-items-end">
            <div class="col-md-12">
              <div class="form-group">
                <label for="firstname">Nombre completo</label>
                <input id="nombre" type="text" class="form-control" placeholder="" required>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="streetaddress">Dirección</label>
                <input id="direccion" name="direccion" type="text" class="form-control"
                  placeholder="Dirección de residencia, barrio" required>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Teléfono</label>
                <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
              </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="w-100"></div>
            <div class="col-md-12">
              <div class="form-group mt-4">
                <div class="radio" id="domicilio">
                  <label class="mr-3"><input id="domicilio" name="domicilio" value='T' type="radio" name="optradio" required> Paso a recoger el
                    producto </label>
                  <label><input id="domicilio" name="domicilio" value="D" type="radio" name="optradio" required> Pagar al recibir el
                    producto</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="cart-detail p-3 p-md-4">
            </div>
            <input class="btn btn-success" onclick="changeCart(this)"     type="submit" value="Crear Pedido">
          </div>
        </form><!-- END -->
      </div>
      <div class="col-xl-5">
        <div class="row mt-5 pt-3">
          <div class="col-md-12 d-flex mb-5">
            <div class="cart-detail cart-total p-3 p-md-4">
              <h3 class="billing-heading mb-4">Total</h3>
              <p class="d-flex">
                <span>Subtotal</span>
                <span>$ {{$reserva->precio_total}}</span>
              </p>
              <p class="d-flex">
                <span>Domicilio</span>
                <span>$0.00</span>
              </p>
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span>$ {{$reserva->precio_total}}</span>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- .col-md-8 -->
  </div>
  </div>
</section> <!-- .section -->

<script>
function changeCart(element){



var nombre  =$('#nombre').val();
	 
var direccion  =$('#direccion').val();
var telefono  =$('#telefono').val();
var domicilio  =$('#domicilio').val();
  

  if(nombre!=null && direccion !=null && telefono!=null){

}else{
alert("Ha finalizado su pedido, la tienda se pondrá en contacto con usted");
}



//	$('#precioIndividual').val(cantidad + 1);
}


</script>

@endsection