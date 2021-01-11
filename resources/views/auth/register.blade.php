<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="h-navbars">
        <div class="logo p-3">
            <a href="#">
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
                        <a class="nav-link" href="{{route('login')}}">INICIA SESIÓN</a>
                    </li>
                </ul>               
            </div>
        </nav>              
        <div class="links-redes">
            <div class="btn-group group-redes" role="group">
                <a href="#" class="btn btn-outline-primary redes facebook" style="background-color: black !important;">
                    <i class="material-icons">facebook</i>
                </a>
                <a href="#" class="btn btn-outline-primary redes twitter" style="background-color: black !important;">
                    <img src="{{asset('img/twitter.PNG')}}" alt="Twitter" class="tw">
                </a>
                <a href="#" class="btn btn-outline-primary redes instagram" style="background-color: black !important;">
                    <img src="{{asset('img/instagram.PNG')}}" alt="Instagram" class="ig">
                </a>
                <a href="#" class="btn btn-outline-primary redes youtube" style="background-color: black !important;">
                    <img src="{{asset('img/youtube.PNG')}}" alt="Youtube" class="yt">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-light" style="background-color: black !important;">
                        <div class="card-header" style="border-color: white !important;"><h3>{{ __('Regístrate') }}</h3></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="alguien@example.com" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma la contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="border-style: none !important  ;">
                                            {{ __('Registrarme') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="f-cust">
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
                <a href="tech.html" class="link-f">Tecnología</a>
                <a href="videojuegos.html" class="link-f">Videojuegos</a>
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
                        <a href="#">
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