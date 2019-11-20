@extends('layout/maintemaplate')

@section('title', 'Datos de contacto')

@section('content')
<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
                      <form action="#" class="billing-form">
                          <h3 class="mb-4 billing-heading">Detalles de facturación</h3>
                <div class="row align-items-end">
                    <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Nombres</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname">Apellidos</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="streetaddress">Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección de residencia">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apartamento, unidad residencial, etc: (opcional)">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="towncity">Barrio (de la ciudad de Palmira)</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Postcode / ZIP *</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Correo electronico</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <div class="form-group mt-4">
                                      <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> Paso a recoger el producto </label>
                                        <label><input type="radio" name="optradio"> Pagar al recibir el producto</label>
                                      </div>
                                  </div>
              </div>
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
                                  <span>$20.60</span>
                              </p>
                              <p class="d-flex">
                                  <span>Domicilio</span>
                                  <span>$0.00</span>
                              </p>
                              <hr>
                              <p class="d-flex total-price">
                                  <span>Total</span>
                                  <span>$17.60</span>
                              </p>
                              </div>
                </div>
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="checkbox">
                                             <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                          </div>
                                      </div>
                                  </div>
                                  <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
                              </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->
@endsection