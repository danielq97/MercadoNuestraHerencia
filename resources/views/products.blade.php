@extends('layout/maintemaplate')

@section('title', 'Productos')

@section('content')
<style>
div.ex1 {
  background-color: lightblue;
  width: 600px;
  height: 500px;
  overflow: scroll;
  
}

.row{
    margin-top: 10px;
}

.vl {
  border-left: 4px solid black;
  height: 1000px;
}

.mar{
    margin-left: 20px;
}
</style>





<div>


<div class="row">
<div class="col xs-6">

<h2 align="center">Crear o editar producto</h2>

<br>

<div class="column">
    <div class="row">
        <p class="col-xs 6">Nombre del producto</p>
        <input type="col xs-6" name="Nombre" id="Nombre" value="">
</div>

<div class="row">
<p>Unidad de medida</p>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Kilo
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Libra</a>
    
  </div>
</div>
</div>
</div>

</div>
<div class="vl"></div>

<div class="col xs-6 mar">
<h2>Listado de productos publicados</h2>
<div class="ex1">
<ul class="list-group">
  <li class="list-group-item active">Papa</li>
  <li class="list-group-item">Miel de abeja</li>
  <li class="list-group-item">Jugo de uva</li>
  <li class="list-group-item">Mermelada de Fresa</li>
  <li class="list-group-item">Cebolla cabezona blanca</li>
  <li class="list-group-item">Crema de cafe</li>
  <li class="list-group-item">Limon mandarino</li>
  <li class="list-group-item">Limon ciciliano</li>
  <li class="list-group-item">Café Quisquiloma</li>
  <li class="list-group-item">Chocula</li>
  <li class="list-group-item">Curuba</li>
</ul>
</div>

</div>
</div>
</div>

@endsection