
<html>
@extends('layout.head')
  

   
       

        <title>Mercado Nuestra Herencia</title>

    
         

    
    
    <body>
  
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header col-md-6">
    <form class="form-inline">
    <input class="form-control col-md-6 mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
  </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active ">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tienda</a>
      </li>
      <li class="nav-item mr-sm-4">
        <a class="nav-link" href="#">Ayuda</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Carrito</a>
      </li>
    </ul>
  
  </div>
</nav>
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
      <img class="d-block w-100" src="http://hablemosdealimentos.com/wp-content/uploads/2018/08/El-Lulo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://biotrendies.com/wp-content/uploads/2015/06/manzana.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://http2.mlstatic.com/arbol-de-guanabana-enano-p-maceta-o-tierra-ver-descripcion-D_NQ_NP_940104-MLM31228448187_062019-F.jpg" alt="Third slide">
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

<div class="bandaProductosVendidos">
    <h1 align="center">Productos más vendidos</h1>
</div>

<br><br><br><br><br><br>
<div class="eje">
<h2 align="center">Sobre nosotros</h2>
</div>

<script>
    $( document ).ready(function(){
    $('.carousel').carousel({
      interval: 1000
    })
});
    </script>
    </body>

<style>
    

    
.centro{
    margin-top: 40px;
   color: black;
}

.bandacarrusel{
    margin-top: 60px;  
}

.bandaProductosVendidos {
margin-top: 20px;
}

.eje{
    margin-top: 2000 px;
}
.carousel, .carousel-inner > .item > img {
  height: 500px; 
  width: 700px;
}





}
    </style>
    </html>
