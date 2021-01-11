<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/logo footer.gif')}}">
    <title>Tecnología y Videojuegos al Día</title>
</head>
<body>
    <div id="fb-root"></div>
    
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
                        <a class="nav-link" href="{{route('login')}}">TECNOLOGÍA / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">VIDEOJUEGOS / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">ESPORTS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="{{route('login')}}">Login / </a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('register')}}">Regístrate</a>
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
    <div id="carouselExampleControls" class="carousel slide news mt-4" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/logo (1).png')}}" class="d-block w-100 c-img" alt="noticia 1">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/ps5-vs-xbox-series-x.jpg')}}" class="d-block w-100 c-img" alt="noticia 2">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/cyberpunk-1.jpg')}}" class="d-block w-100 c-img " alt="noticia 3">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/celulares2020.jpg')}}" class="d-block w-100 c-img" alt="noticia 4">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/modeloCyberpk.jpg')}}" class="d-block w-100 c-img" alt="noticia 5">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
    <div class="posts">
        <h1 class="h1-recent">Lo más reciente</h1>  
        <div class="decob navbar"></div>
        <div class="cartas row row-cols-1 row-cols-md-1 row-cols-lg-2">
            @foreach($posts as $post)
            @if ($cont <= 3)            
            <div class="col mb-2 col-12 col-lg-6">          
                <div class="card" style="background-color: black;">
                  <img class="card-img-top c-img" alt="IMAGEN POST 1" src="{{asset("posts/$post->image_post")}}">
                  <h5 class="card-title">{{$post->title_post}}</h5>
                  <div class="card-body">                               
                    <!--<p class="card-text">{{$post->description}}</p> -->                                                      
                    <a href="{{route('login')}}" class="btn btn-primary ver-mas">Ver publicación</a>
                    @foreach ($autor as $key)
                        @if($post->user_id == $key->id)
                            <a href="{{route('login')}}" style="float: right; padding-right: 2rem; color: var(--redTech);">Por: {{$key->name}}</a>
                        @endif
                    @endforeach                    
                  </div>
                </div>          
            </div>  
            @endif
            <p style="display: none;">{{$cont=$cont+1}}</p> 
            @endforeach     
        </div>
        <div class="posts-redes">
            <blockquote class="twitter-tweet" data-lang="es" data-theme="dark"><p lang="en" dir="ltr">In 2020, we produced and delivered half a million cars. Huge thanks to all those who made this possible.<a href="https://t.co/q43vz6RMhd">https://t.co/q43vz6RMhd</a></p>&mdash; Tesla (@Tesla) <a href="https://twitter.com/Tesla/status/1345377367947005955?ref_src=twsrc%5Etfw">2 de enero de 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="fb-post" data-href="https://www.facebook.com/XatakaMexico/posts/3827535830645310" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/XatakaMexico/posts/3827535830645310" class="fb-xfbml-parse-ignore"><p>💸 Y todavía alcanzan a llegar antes del día de los Reyes Magos. 👑🎁</p>Publicado por <a href="https://www.facebook.com/XatakaMexico/">Xataka México</a> en&nbsp;<a href="https://www.facebook.com/XatakaMexico/posts/3827535830645310">Jueves, 31 de diciembre de 2020</a></blockquote></div>
        </div>
        <div class="decob navbar"></div>
    </div>
    <footer>
            <div class="cont-footer">
            <div class="row">
            <div class="sitio col-12 col-sm-6 col-md-3">
                <p class="titulos-f">TECH NEWS COMUNITY</p>
                <a href="{{route('login')}}" class="link-f">Autores</a>
                <a href="{{route('login')}}" class="link-f">Colaboradores</a>
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
                <a href="{{route('login')}}" class="link-f">Tecnología</a>
                <a href="{{route('login')}}" class="link-f">Videojuegos</a>
                <a href="{{route('login')}}" class="link-f">Esports</a>
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
<script src="{{asset('js/app.js')}}"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0" nonce="MMCCfUzm"></script>
</html>