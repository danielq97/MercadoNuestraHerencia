Sección para crear Productos
<form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">

    {{csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br/>
    <label for="ApellidoPaterno">{{'Unidad de Medida'}}</label>
    <input type="text" name="UnidadDeMedida" id="" value="">
    <br/>    
    <br/>
    <label for="Foto">{{'Foto'}}</label>
    <input type="file" name="Foto" id="Foto" value="">
    <br/>
    <input type="submit" value="Agregar">
    <a href="{{url('productos')}}" >Regresar</a>
</form> 