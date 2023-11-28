<!DOCTYPE html>

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Nombre de librería</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="{{asset('template/images/icon.ico')}}" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="{{asset('template/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/plugins/bootstrap/bootstrap-slider.css')}}" rel="stylesheet">
  <link href="{{asset('template/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/plugins/slick/slick.css')}}" rel="stylesheet">
  <link href="{{asset('template/plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <link href="{{asset('template/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

</head>

<body class="body-wrapper">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light navigation">
              <a class="navbar-brand" href="">
              <img src="{{asset('template/images/logo2.png')}}" alt="" />
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto main-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('libros.index')}}">Libros</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Panel</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-10">
                  @guest
                  <li class="nav-item">
                    <a class="btn btn-outline-success my-2 my-sm-0" style="border:none" style="background-color: transparent" href="login">Iniciar Sesion</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-info my-2 my-sm-0" style="border:none" style="background-color: transparent" href="register">Registrarse</a>
                  </li>
                  @endguest
                  @auth 
                  <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" style="border:none" style="background-color: transparent" href="{{route('libros.create')}}">
                    <i class="fa fa-plus-circle"></i> Registrar Libro</a>
								  </li>
                  <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" style="border:none" style="background-color: transparent" href="{{route('clientes.create')}}">
                    <i class="fa fa-plus-circle"></i> Registrar Cliente</a>
								  </li>
                <li>
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                      style="border:none" style="background-color: transparent">
                        {{ Auth::user()->name }}
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li class="d-sm-none"><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                          <li class="d-sm-none"><a class="dropdown-item" href="{{route('clientes.index')}}">Clientes</a></li>
                          <li class="d-sm-none"><a class="dropdown-item" href="{{route('libros.index')}}">Libros</a></li>
                          <!-- Opciones adicionales para pantallas más grandes (md, lg, xl) -->
                          <li class="d-none d-sm-block"><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                          <li class="d-none d-sm-block"><a class="dropdown-item" href="{{route('clientes.index')}}">Clientes</a></li>
                          <li class="d-none d-sm-block"><a class="dropdown-item" href="{{route('libros.index')}}">Libros</a></li>
                      </ul>
                  </div>
                </li>
                @endauth
                @auth
                  <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="border:none" style="background-color: transparent" class="btn btn-danger">
                          Cerrar Sesión
                        </button>
                    </form>
                  </li>
                  @endauth
                </ul>
              </div>
              
            </nav>
          </div>
        </div>
      </div>
      
    </header>

{{ $slot }}

<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Desarrollado y diseñado por <b>Oswaldo Sandoval Berumen</b>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>

<!-- 
Essential Scripts
=====================================-->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('template/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('template/plugins/bootstrap/bootstrap-slider.js')}}"></script>
<script src="{{asset('template/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{asset('template/plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{asset('template/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('template/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{asset('template/plugins/google-map/map.js')}}" defer></script>

<script src="{{asset('template/js/script.js')}}"></script>

</body>

</html>