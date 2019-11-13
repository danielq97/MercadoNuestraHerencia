@extends('layout/maintemaplate')

@section('content')
@section('title', 'Productos')

<style>
img {
  border: 1px solid #000000;
  border-radius: 4px;
  padding: 5px;
  
}
    </style>

<div>
<div class="container">
    <h1 align="center" class="mt-2">Nuestros productos disponibles</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            </div>
        </div>
    </div>
<br><br>


<div class="container">

<h2 class="mt-4 ml-4">Listado de productos publicados</h2>
<div class="row">

    <!--col-12  sm-6  xl-4-->

    @foreach($productos as $producto)
    
    <div class="col-12 col-sm-6 col-lg-4 mt-4"><img src="{{asset('storage').'/'.$producto->foto}}" 
            border="2" width="200" height="200">
            <br>
           
            <h5>{{$producto->nombre}}</h5>
            <div class="row">
                <h6>${{$producto->precio}}</h6>
                <a class="nav-link ml-4" href="#"><i class="fas fa-shopping-cart"></i>Agregar</a>
            </div>
            
    
    </div>
    
    @endforeach
</div>


</div>


    
</div>

@endsection