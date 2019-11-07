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


<table>
    <tr>
        <td>            <!-- Espacio para formulario -->
                        
                        <form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
    
                        <h2 align="center">Crear o editar producto</h2>
                        
                        <br>
                        <div class="row nue">
                        
                        <div class="column" align="left">
                            
                        <div class="imagen col-sm-6"><img src="http://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" width="300px" height="300px"></div>
                        
                        
                        
                        <input type="file" class="sepa2 ml-3" name="foto" id="foto"></input>
                        
                        
                        
                        </div>


                        <table>
                            <tr>
                                <td>
                                    <p >Nombre del producto</p>
                                </td>

                                <td>
                                    <input type="text" name="nombre" id="nombre" value="">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                        <p class="sep">Unidad de medida</p>
                                </td>
                                <td>
                                        <div class="seg">
                                                <select id="unidadmedida_id" name="unidadmedida_id" style="height:40px">
                                                @foreach($unidadesmedidas as $unidadmedida)
                                                <option value="{{$unidadmedida->id}}">{{$unidadmedida->nombre}}</option>
                                                @endforeach
                                                </select>
                                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                        <p class="sep">Precio por unidad</p>
                                </td>
                                <td>
                                        <input type="text" name="precio" id="precio" value="" class="seg">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                        <p class="sep">Categoría</p>
                                </td>
                                <td>
                                        <div class="seg">
                                                <select id="list" style="height:40px" name="categoria_id" id="categoria_id">
                                                @foreach($categorias as $categoria)
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                                @endforeach
                                                </select>
                                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                        <p class="sep">Descripción</p>
                                </td>
                                <td>
                                        <textarea class="seg" rows="4" cols="50" name="descripcion" id="descripcion">
                                            </textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                        <p>Cantidad en bodega</p>
                                </td>
                                <td>
                                        <input type="text" name="cantidad" id="cantidad" value="" class="seg2">      
                                </td>
                            </tr>

                        </table>
                        
                        </div>
                        
                        <input type="submit" value="Agregar">
                        
                        </form>
                        
                        
                        
        </td>


        <td>

                
                <h2>Listado de productos publicados</h2>
                <div class="ex1">
                <ul class="list-group">
                
                @foreach($categorias as $categoria)
                <li class="list-group-item">>{{$categoria->nombre}}</li>
                @endforeach

                </ul>
                </div>
        </td>


    </tr>
</table>


@endsection