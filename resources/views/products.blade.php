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

.nue{
    margin-left: 20px;
  
}
.vl {
  border-left: 4px solid black;
  height: 1000px;
}

.mar{
    margin-left: 20px;
}

.sep{
    margin-top: 25px;
}

.seg{
    margin-top: 15px;
}

.sepa{
    margin-top: 100px;
}

.sepa2{
    margin-top: 220px;
}

.seg2{
    margin-top:20px;
}
</style>





<div>


<div class="row nue">
<div class="col xs-6">

<h2 align="center">Crear o editar producto</h2>

<br>
<div class="row nue">

<div class="column" align="left">
    
<div class="imagen col-sm-4"><img src="https://i1.wp.com/lamariana.com.co/wp-content/uploads/2019/05/Arveja20en20cascara.jpg?fit=471%2C349&ssl=1"></div>



<button type="" class="sepa2 ml-3">Seleccionar foto</button>



</div>


<div class="column nue" align="left">
    
        <p >Nombre del producto</p>
        <p class="sep">Unidad de medida</p>
        <p class="sep">Precio por unidad</p>
        <p class="sep">Categoría</p>
        <p class="sep">Descripción</p>
        <p class="sepa">Cantidad en bodega</p>




</div>
<div class="column nue">

<input type="text" name="Nombre" id="Nombre" value="">

<div class="dropdown seg">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Kilo
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Libra</a>
    
  </div>

  
</div>

<input type="text" name="Precio" id="Precio" value="" class="seg">

<div class="dropdown seg">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Fruta
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Libra</a>
    
  </div>

  
</div>

<textarea class="seg" rows="4" cols="50">

</textarea>

<br>
<input type="text" name="Cantidad" id="Cantidad" value="" class="seg2">
<br>
<br>
<button class="succes">Crear producto</button>

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