@extends('layout/maintemaplate')

@section('title', 'Sobre Nosotros')

@section('content')
<h1 align="center" class="mt-2"> Sobre Mercado Nuestra Herencia</h1>


<div class="aboutus-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="aboutus-image float-left hidden-sm"><img
              src="https://static.hsbnoticias.com/sites/default/files/styles/original/public/gallery/2015/04/principalrrrrrrrrrr.jpg?itok=SR28-NuI"
              alt=""></div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="aboutus-content">
            <h1>¿Quienes somos?</h1>
            <p>Nuestra Herencia es una asociación de jóvenes campesinos de la zona rural del municipio de palmira
              ubicados en la cuenca del río amaime y rio nima y te ofrecemos diversos productos agropecuarios amigables
              con el medio ambiente y con la salud del consumidor, generamos valor agregado con productos procesados por
              nuestra asociación.</p>

            <h1>¿Donde estamos ubicados?</h1>

            <div class="row justify-content-center">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../../images/somosnuestraherencia1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../images/somosnuestraherencia2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../images/somosnuestraherencia3.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
            <p class="mt-3">Tenemos una tienda fisica ubicada en la siguiente dirección:</p>
            <p><i class="material-icons">pin_drop</i> Carrera 26# 34-60 Barrio: Obrero, Palmira Valle</p>
            <h1 class="mt-3">Números de télefono</h1>
            <p>Estos son nuestros números de télefono</p>
            <p><i class='fas fa-mobile-alt'></i> Celular: 3183449646 - 3005103650</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<style>
  .aboutus-area {
    padding-top: 120px;
    padding-bottom: 120px;
  }

  /*-- aboutus Image --*/
  .aboutus-image {
    margin-right: 52px;
    width: 318px;
  }

  @media only screen and (min-width: 992px) and (max-width: 1200px) {
    .aboutus-image {
      margin-right: 35px;
      width: 345px;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .aboutus-image {
      margin-bottom: 30px;
      float: none;
    }
  }

  @media only screen and (max-width: 767px) {
    .aboutus-image {
      margin-bottom: 30px;
      margin-right: 0;
      float: none;
      width: auto;
    }
  }

  .aboutus-image img {
    width: 100%;
  }

  /*-- aboutus Content --*/
  .aboutus-content h1 {
    font-size: 40px;
    font-weight: 800;
    line-height: 40px;
    margin-bottom: 2px;
  }

  @media only screen and (max-width: 479px) {
    .aboutus-content h1 {
      font-size: 30px;
      line-height: 30px;
    }
  }

  .aboutus-content h1 span {
    color: #71b100;
  }

  .aboutus-content h4 {
    font-size: 18px;
    font-weight: 500;
    color: #9b9b9b;
    margin-bottom: 23px;
  }

  .aboutus-content p {
    font-size: 16px;
    line-height: 27px;
  }

  /*-- counter --*/
  .counter {
    border: 1px solid #eeeeee;
    margin-top: 32px;
    float: left;
    width: 100%;
  }

  .counter .single-counter {
    float: left;
    width: 25%;
    padding: 28px 15px 28px;
  }

  @media only screen and (max-width: 767px) {
    .counter .single-counter {
      width: 50%;
    }

    .counter .single-counter:nth-child(3) {
      border-top: 1px solid #eeeeee;
      border-left: 0px solid #eeeeee;
    }

    .counter .single-counter:nth-child(4) {
      border-top: 1px solid #eeeeee;
    }
  }

  .counter .single-counter+.single-counter {
    border-left: 1px solid #eeeeee;
  }

  .counter .single-counter h2 {
    font-size: 30px;
    color: #71b100;
    line-height: 24px;
    font-family: "Open Sans", sans-serif;
    margin-bottom: 8px;
  }

  .counter .single-counter p {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 0;
    color: #8f8f8f;
  }
</style>
<script>
  $( document ).ready(function(){
        $('.carousel').carousel({
          interval: 1000
        })
    });
</script>

@endsection