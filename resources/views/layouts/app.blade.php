<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('../assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('../assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('../assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('../assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('../assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{asset('../assets/img/sidebar-4.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{ url('/home')}" class="simple-text">
                    Intersalud del Valle
                </a>
            </div>

            <ul class="nav">
                
                <li>
                    <a href="">
                        <i class="pe-7s-news-paper"></i>
                        <p>Pagos</p>
                    </a>
                </li>

                
                <li>
                    <a href="{{route('clientes.index')}}">
                        <i class="pe-7s-users"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                
                
                
                <li>
                    <a href="{{route('empresas.index')}}">
                        <i class="pe-7s-portfolio"></i>
                        <p>Empresas</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('usuarios.index')}}">
                        <i class="pe-7s-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>                    

                
                

                <li>
                    <a href="{{route('empleados.index')}}">
                        <i class="pe-7s-user"></i>
                        <p>Empleados</p>
                    </a>
                </li>


                <li>
                    <a href="{{route('entidads.index')}}">
                        <i class="pe-7s-culture"></i>
                        <p>Entidad</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="pe-7s-map-marker"></i>
                        <p>Sedes</p>
                    </a>
                </li>
                

                <li>
                    <a href="">
                        <i class="pe-7s-config"></i>
                        <p>Configuracion</p>
                    </a>
                </li>
                   
                
        

            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir del sistema') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li> 
                                </ul>
                            </li>
                        @endguest
                        
                    </ul>




                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">

                  @yield('content')

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="home">
                                Pag. Principal
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Intersalud del Valle</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
 <!--   Core JS Files   -->
 <script src="{{asset('../assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('../assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('../assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('../assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('../assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('../assets/js/demo.js')}}"></script>

	

</html>