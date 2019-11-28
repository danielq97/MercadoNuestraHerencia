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

        <div class="row">

            <!--col-12  sm-6  xl-4-->

            @foreach($productos as $producto)

            <div class="col-12 col-sm-6 col-lg-4 mt-4">
                <a href="{{url('/productoDetalle/'.$producto->id)}}">
                    <img src="{{Storage::disk('local')->url($producto->foto)}}" border="2" width="200" height="200"></img>

                </a>
                <br>
                <h5>{{$producto->nombre}}</h5>
                <div class="row">
                    <h6 class="mr-3 ml-3">${{$producto->precio}}</h6>
                    <a class="btn btn-info" href="{{ url('/productoDetalle/'.$producto->id) }}">Ver producto <i class="far fa-eye"></i></a>
                </div>


            </div>

            @endforeach
        </div>
        <br>
        <br>
        <br>
        {{ $productos->links() }}


    </div>



</div>

@endsection