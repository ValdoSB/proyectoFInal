<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Información de Cliente</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="{{asset('template/images/favicon.ico')}}"rel="shortcut icon" />

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
            <a class="navbar-brand" href="{{ route('clientes.index')}}">
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
                </ul>
                <ul class="navbar-nav ml-auto mt-10">
                  <li class="nav-item">
                    <a class="nav-link login-button" href="login">Iniciar Sesion</a>
                  </li>
                  <li class="nav-item">
									  <a class="nav-link text-white add-button" href="{{route('clientes.create')}}">
                    <i class="fa fa-plus-circle"></i> Registrar Cliente</a>
								  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
            <div class="col-lg-8">
				{{$slot}}
			</div>
		</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<!-- Footer Bottom -->
<footer class="footer-bottom" style="position: fixed; bottom: 0px; width:100%"  >
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>  <a class="text-white" >Diseñado y Desarrollado por Alvarez Gutierrez Sebastian Alejandro</a></p>
        </div>
      </div>

    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
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