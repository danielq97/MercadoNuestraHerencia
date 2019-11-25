<html>

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">


  <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.timepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">




  <script src="https://kit.fontawesome.com/623353ff82.js" crossorigin="anonymous"></script>

</head>

<body>

  <ul class="nav justify-content-end">

    <!-- Authentication Links -->
    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>


      @if (Auth::user()->rol_id==2)
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="/pedidosDisponibles">
          Administrar pedidos
        </a>

        <a class="dropdown-item" href="/productos/create">
          Administrar productos
        </a>
        <a class="dropdown-item" href="/boletinprecios">
          Precios sugeridos
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
          {{ __('Cerrar sesión') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      @else
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/mispedidos">
          Pedidos realizados
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
          {{ __('Cerrar sesión') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>

      @endif

    </li>
    @endguest



  </ul>

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
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/productos">Ver productos</a>
        </li>
        <li class="nav-item mr-sm-4">
          <a class="nav-link" href="/help">Ayuda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i>Carrito</a>
        </li>
      </ul>

    </div>
  </nav>

  @yield('content')

</body>

<style>
  .centro {
    margin-top: 40px;
    color: black;
  }

  .bandacarrusel {
    margin-top: 60px;
  }

  .bandaProductosVendidos {
    margin-top: 40px;
  }

  .eje {
    margin-top: 2000 px;
  }

  .sobre {
    font-size: 16px;
  }

  .carousel,
  .carousel-inner>.item>img {
    height: 10%;
    width: 40%;
  }

  .imagen {
    height: 150px;
    weight: 150px;
  }


  #contenedor_principal {
    width: 1024px;
    height: auto;
    position: relative;
    margin: auto;
    margin-top: 20px;
  }

  .contenedor_imagen_texto {
    width: 335px;
    height: auto;
    position: relative;
    display: inline-block;
    vertical-align: top;
    overflow: hidden;
  }


  }
</style>

</html>