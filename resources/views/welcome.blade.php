@extends('layout/maintemaplate')

@section('title', 'Mercado Nuestra Herencia')



@section('content')

<div class="centro">

  <h1 align="center">Mercado Nuestra Herencia</h1>
</div>
<div class="row justify-content-center">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100"
          src="https://static.hsbnoticias.com/sites/default/files/styles/original/public/gallery/2015/04/principalrrrrrrrrrr.jpg?itok=SR28-NuI"
          alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://biotrendies.com/wp-content/uploads/2015/06/manzana.jpg"
          alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"
          src="https://http2.mlstatic.com/arbol-de-guanabana-enano-p-maceta-o-tierra-ver-descripcion-D_NQ_NP_940104-MLM31228448187_062019-F.jpg"
          alt="Third slide">
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
<br>

<div class="bandaProductosVendidos col-12">
  <h1 align="center">Productos</h1>

  <div id="contenedor_principal">
    <!--Primera Imagen-->

    <div class="row">

      @foreach($productos as $producto)

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="contenedor_imagen_texto">
          <div class="imagen col-sm-4"><img src="{{asset('storage').'/'.$producto->foto}}" width="150"></div>
        </div>
        <br><br>
        <div class=row>
          <h6 class="ml-sm-5 mr-2"> {{ $producto->nombre}} </h6>
          <a class="btn btn-info" href="{{ url('/productoDetalle/'.$producto->id) }}">Ver producto <i
              class="far fa-eye"></i></a>
        </div>

      </div>
      @endforeach



    </div>
  </div>
</div>
<br>
<br>
<h2 align="center"><a class="btn btn-success" href="/productos"> Ver más productos <i class="fas fa-seedling"></i></a>
</h2>
<br>
<br>
<br>
<div class="eje">
  <h2 align="center">Sobre nosotros</h2>

  <br>

  <h6 align="center" class="sobre">Nuestra Herencia es una asociación de jóvenes campesinos de la zona rural del
    municipio de Palmira
    ubicados <br> en la cuenca del Río Amaime y Río Nima y ofrecen diversos productos agropecuarios amigables con el
    medio <br> ambiente
    y con la salud del consumidor, generamos valor agregado con productos procesados por nuestra asociación.<h6>

    
</div>


<script>
  $( document ).ready(function(){
      $('.carousel').carousel({
        interval: 2500
      })
  });
</script>
@endsection