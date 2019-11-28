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

    .row {
        margin-top: 10px;

    }

    .nue {
        margin-left: 20px;

    }

    .vl {
        border-left: 4px solid black;
        height: 1000px;
    }

    .mar {
        margin-left: 20px;
    }

    .sep {
        margin-top: 25px;
    }

    .seg {
        margin-top: 15px;
    }

    .sepa {
        margin-top: 100px;
    }

    .sepa2 {
        margin-top: 20px;
    }

    .seg2 {
        margin-top: 20px;
    }

    .nue2 {
        margin-left: 40px;
    }
</style>





<div>


    <div class="row nue">

        <!-- Espacio para formulario -->



        <table>

            <tr>
                <form method="post" action="{{url('/productos/'.$producto->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div>

                        <h2 align="center">Crear o editar producto</h2>

                        <br>
                        <div class="row nue">

                            <div align="left" class="column">

                                <div class="imagen"><img src="{{asset('storage').'/'.$producto->foto}}" width="200px"
                                        height="200px"></div>

                                <br><br><br>
                                <input type="file"  name="foto" id="foto" style="width:200px"></input>



                            </div>


                            <div class="nue">

                                <p>Nombre del producto</p>
                                <p class="sep">Unidad de medida</p>
                                <p class="sep">Precio por unidad</p>
                                <p class="sep">Categoría</p>
                                <p class="sep">Descripción</p>
                                <p class="sepa">Cantidad en bodega</p>

                            </div>
                            <div class="nue">

                                <input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">



                                <div class="seg">
                                    <select id="unidadmedida_id" name="unidadmedida_id" style="height:40px">

                                        <option value="{{$unidadmedidaproducto1->id}}">
                                            {{$unidadmedidaproducto1->nombre}} </option>
                                        @foreach($data['unidadesmedidas'] as $unidadmedida)
                                        <option value="{{$unidadmedida->id}}">{{$unidadmedida->nombre}}</option>
                                        @endforeach


                                    </select>
                                </div>



                                <input type="text" name="precio" id="precio" value="{{$producto->precio}}" class="seg">


                                <div class="seg">
                                    <select id="list" style="height:40px" name="categoria_id" id="categoria_id">

                                        <option value="{{$categoriaproducto1->id}}">{{$categoriaproducto1->nombre}}
                                        </option>
                                        @foreach($data['categorias'] as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <textarea class="seg" rows="4" cols="50" name="descripcion" id="descripcion"
                                    style="width:250px">{{$producto->descripcion}}</textarea>

                                <br>
                                <input type="text" name="cantidad" id="cantidad" value="{{$producto->cantidad}}"
                                    class="seg2">
                                <br>
                                <br>
                                <input type="submit" class="btn btn-success" value="Agregar">

                            </div>

                        </div>

                    </div>

                </form>
            </tr>
            <tr>
                <div class="nue2">
                    <h2>Listado de productos publicados</h2>
                    <div class="ex1">
                        <ul class="list-group">

                            @foreach($data['productos'] as $producto)
                            <a class="list-group-item list-group-item-action">{{$producto->nombre}}
                            <p>Cantidad en bodega: {{ $producto->cantidad }}</p>    
                            <form style="center"
                                    action="{{url('/productos/'.$producto->id.'/edit')}}">

                                    <input type="submit" class="btn btn-primary" value="Editar" />
                                </form></a>
                            <!-- <li class="list-group-item">{{$producto->nombre}}</li> -->
                            @endforeach


                        </ul>
                    </div>

                </div>
            </tr>


        </table>





        @endsection