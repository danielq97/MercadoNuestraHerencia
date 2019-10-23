
<html>
    
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://kit.fontawesome.com/623353ff82.js" crossorigin="anonymous"></script>
        
      </head>
        <body>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                        @if (session('status'))
                        <a class="nav-link active" href="/login">Ingresar</a>
                        @endif                
                        <a class="nav-link active" href="/login">Perfil</a>
                </li>
                <li class="nav-item">
                  
                  @if (session('status'))
                  <a class="nav-link" href="/signup">Registrarse</a>
                  @endif                
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Cerrar sesión</a>

                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>



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
                              <a class="nav-link" href="/products">Ver nuestro productos</a>
                            </li>
                            <li class="nav-item mr-sm-4">
                              <a class="nav-link" href="/help">Ayuda</a>
                            </li>
                      
                            <li class="nav-item">
                              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Carrito</a>
                            </li>
                          </ul>
                        
                        </div>
                      </nav>

                @yield('content')
      
        </body>
    
    <style>
        
    .centro{
        margin-top: 40px;
       color: black;
    }
    
    .bandacarrusel{
        margin-top: 60px;  
    }
    
    .bandaProductosVendidos {
    margin-top: 40px;
    }
    
    .eje{
        margin-top: 2000 px;
    }

    .sobre{
      font-size: 16px;
    }
    .carousel, .carousel-inner > .item > img {
      height: 500px; 
      width: 700px;
    }
    
    .imagen{
        height: 150px;
        weight: 150px;
    }
    
    
    #contenedor_principal{
    width:1024px;
    height:auto;
    position:relative;
    margin:auto;
    margin-top: 20px;
    }
    .contenedor_imagen_texto{
    width:335px;
    height:auto;
    position:relative;
    display:inline-block;
    vertical-align:top;
    overflow:hidden;
    }
    
    
    }
        </style>
        </html>
    