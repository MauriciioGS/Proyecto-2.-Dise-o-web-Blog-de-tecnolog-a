<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TECH NEWS - TECNOLOGÍA Y VIDEOJUEGOS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/logo footer.gif')}}">
    <title>Tecnología y Videojuegos al Día</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <header class="h-navbars">
        <div class="logo p-3">
            <a href="{{url('/')}}">
                <video src="{{asset('img/logo.mp4')}}" autoplay loop></video>
            </a>
        </div>      
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important;">            
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">                   
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 listado">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminposts.index')}}">TECNOLOGÍA / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminpostsvj.index')}}">VIDEOJUEGOS / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ESPORTS </a>
                    </li>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu bg-darkgrey" aria-labelledby="navbarDropdown" style="background-color: black !important;">
                            <p style="display: none;">{{$usuario=Auth::user()}}</p>
                            <a class="dropdown-item text-light" href="{{route('profile.show',$usuario)}}">Perfil</a>

                            @if(Auth::user()->admin)
                            <a class="dropdown-item text-light" href="{{route('adminposts.create')}}">Nueva Publicación</a>
                            @endif

                            <a class="dropdown-item text-light" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                            @csrf
                            </form>

                        </div>
                    </li>             
                </ul>               
            </div>
        </nav>              
    </header>
    <main>
    @yield('content')  
    </main>
    <footer >
            <div class="cont-footer">
            <div class="row">
            <div class="sitio col-12 col-sm-6 col-md-3">
                <p class="titulos-f">TECH NEWS COMUNITY</p>
                <a href="nosotros.html" class="link-f">Autores</a>
                <a href="#" class="link-f">Colaboradores</a>
                <a href="#" class="link-f">Política de privacidad</a>
                <a href="#" class="link-f">Mapa de sitio</a>                >
            </div>
            
            <div class="secciones col-12 col-sm-6 col-md-3">
                <p class="titulos-f" style="padding-top: 2rem;
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
                margin-right: auto;
                margin-left: auto;
                margin-bottom: .6rem;">SECCIONES</p>            
                <div class="col-6">             
                <a href="{{route('adminposts.index')}}" class="link-f">Tecnología</a>
                <a href="{{route('adminpostsvj.index')}}" class="link-f">Videojuegos</a>
                <a href="#" class="link-f">Esports</a>
                </div>
            </div>      
            <div class="redes-f col-12 col-sm-6 col-md-3">
                <p class="titulos-f">REDES SOCIALES</p>
                <div class="links-redes">
                <div class="btn-group group-redes p-0" role="group">
                    <a href="#" class="btn btn-outline-primary redes facebook" style="background-color: black !important;">
                        <i class="material-icons">facebook</i>
                    </a>
                    <a href="#" class="btn btn-outline-primary redes twitter" style="background-color: black !important;">
                        <img src="{{asset('img/twitter.PNG')}}" alt="Twitter" class="tw">
                    </a>
                    <a href="#" class="btn btn-outline-primary redes instagram" style="background-color: black !important;"><img src="{{asset('img/instagram.PNG')}}" alt="Instagram" class="ig">
                    </a>
                    <a href="#" class="btn btn-outline-primary redes youtube" style="background-color: black !important;">
                        <img src="{{asset('img/youtube.PNG')}}" alt="Youtube" class="yt">
                    </a>
                </div>
                </div>
            </div>
            <div class="cont-aviso col-12 col-sm">
                <div class="cont-img-aviso">
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 aviso">
                        <a href="{{url('/')}}">
                            <img src="{{asset('img/logo footer.gif')}}" alt="Card image cap" style="width: 273px;">
                        </a>                
                    </div>  
                </div>
            </div>
            
            </div>
            </div>
    </footer>
</body>
</html>
