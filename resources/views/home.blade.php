@extends('layout/maintemaplate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if( auth()->check() )
                        
                            <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                        
                    @else
                        <p>No estas logueado</p>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
