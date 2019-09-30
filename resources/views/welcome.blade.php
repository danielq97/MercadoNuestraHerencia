
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
      <img class="d-block w-100" src="https://static.hsbnoticias.com/sites/default/files/styles/original/public/gallery/2015/04/principalrrrrrrrrrr.jpg?itok=SR28-NuI" alt="First slide">
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

    
    <div id="contenedor_principal">
<!--Primera Imagen-->

<div class="row">

<div class="column">
<div class="contenedor_imagen_texto">
<div class="imagen col-sm-4"><img src="https://diarioroatan.com/wp-content/uploads/2017/10/frijol-1.jpg"></div>


</div>
<br><br>
<div class= row>
<p  class="ml-sm-5">Frijol cargamento</p>
<button type="button" class="btn btn-success ml-sm-5">Agregar</button>
</div>

</div>


   

<!--Segunda Imagen-->
<div class="column">
<div class="contenedor_imagen_texto">
<div class="imagen col-sm-4"><img src="https://i1.wp.com/lamariana.com.co/wp-content/uploads/2019/05/Arveja20en20cascara.jpg?fit=471%2C349&ssl=1"></div>
</div>
<br><br>
<div class= row>
<p  class="ml-sm-5">Arveja</p>
<button type="button" class="btn btn-success ml-sm-5">Agregar</button>
</div>
</div>

<!--tercera Imagen-->
<div class="column">
<div class="contenedor_imagen_texto">
<div class="imagen col-sm-4"><img src="https://static.iris.net.co/semana/upload/images/2013/1/13/329541_235110_1.jpg"></div>
</div>
<br><br>
<div class= row>
<p  class="ml-sm-5">Tomate</p>
<button type="button" class="btn btn-success ml-sm-5">Agregar</button>
</div>

</div>

</div>
</div>
</div>

<br><br>
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
margin-top: 40px;
}

.eje{
    margin-top: 2000 px;
}
.carousel, .carousel-inner > .item > img {
  height: 500px; 
  width: 700px;
}

.imagen{
    height: 150px;
    weight: 150px;
}


#contenedor_principal{
width:1024px;
height:auto;
position:relative;
margin:auto;
margin-top: 20px;
}
.contenedor_imagen_texto{
width:335px;
height:auto;
position:relative;
display:inline-block;
vertical-align:top;
overflow:hidden;
}


}
    </style>
    </html>
