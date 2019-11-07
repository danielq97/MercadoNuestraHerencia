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
    margin-top: 20px;
}

.seg2{
    margin-top:20px;
}


</style>





<div>


<div class="row nue">

<!-- Espacio para formulario -->

<form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
{{csrf_field()}}

<div class="col-12 col-lg-9">

<h2 align="center">Crear o editar producto</h2>

<br>
<div class="row nue">

<div class="col-lg-3" align="left">
    
<div class="imagen col-sm-4"><img src="http://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" width="100px" height="100px"></div>



<input type="file" class="sepa2" name="foto" id="foto"></input>



</div>


<div class="col-lg-4">
    
        <p >Nombre del producto</p>
        <p class="sep">Unidad de medida</p>
        <p class="sep">Precio por unidad</p>
        <p class="sep">Categoría</p>
        <p class="sep">Descripción</p>
        <p class="sepa">Cantidad en bodega</p>




</div>
<div class="col-lg-2">

<input type="text" name="nombre" id="nombre" value="">



<div class="seg">
<select id="unidadmedida_id" name="unidadmedida_id" style="height:40px">

@foreach($unidadesmedidas as $unidadmedida)
<option value="{{$unidadmedida->id}}">{{$unidadmedida->nombre}}</option>
@endforeach


</select>
</div>



<input type="text" name="precio" id="precio" value="" class="seg">


<div class="seg">
<select id="list" style="height:40px" name="categoria_id" id="categoria_id">

@foreach($categorias as $categoria)
<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
@endforeach


</select>
</div>

<textarea class="seg" rows="4" cols="50" name="descripcion" id="descripcion">

</textarea>

<br>
<input type="text" name="cantidad" id="cantidad" value="" class="seg2">
<br>
<br>
<input type="submit" value="Agregar">

</div>

</div>

</div>

</form>
<div class="vl ml-1"></div>

<div class="col-12 col-lg-3 mar">
<h2>Listado de productos publicados</h2>
<div class="ex1">
<ul class="list-group">

@foreach($categorias as $categoria)
<li class="list-group-item">>{{$categoria->nombre}}</li>
@endforeach

</ul>
</div>

</div>

</div>
</div>

@endsection