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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
        <form class="form-inline" action="{{url('/productos')}}" method="get">
          <input class="form-control col-md-6 mr-sm-2" type="text" placeholder="Buscar producto" aria-label="Search" id="nombre" name="nombre">
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
          <a class="nav-link" href="/cart" id="carrito" name="carrito"><i class="fas fa-shopping-cart"></i>Carrito</a>
        </li>
      </ul>

    </div>
  </nav>

  @yield('content')


</body>

<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #F2EFEE;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Permanece conectado con el mercado <strong>Somos Nuestra Herencia</strong></h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/pg/somosnuestraherenciaco">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Somos Nuestra Herencia</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Tienda agrícola liderada por jóvenes rurales del programa de Corporación VallenPaz, comercializan sus producto bajo el sello Cosechas de Paz.</p>

      </div>
      <!-- Grid column -->

    
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Enlaces de interés</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="/about">Sobre nosotros</a>
        </p>
        <p>
          <a href="/productos">Ver productos</a>
        </p>
        <p>
          <a href="/help">Ayuda</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Carrera 26# 34-60 Barrio: Obrero, Palmira Valle</p>
        
        <p>
          <i class="fas fa-phone mr-3"></i> 3152257380</p>
        <p>
          <i class="fas fa-phone mr-3"></i> 3183449646</p>
          <p>
          <i class="fas fa-phone mr-3"></i> 3145245986</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<style>
.fa-circle {
  color: red;
}

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
    height: 400px;
    width: 600px;
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