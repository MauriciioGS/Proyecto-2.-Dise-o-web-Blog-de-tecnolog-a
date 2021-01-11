@extends('layouts.app')

@section('content')
<main class="main-publicacion mt-4 pt-4 text-center text-light">
    <div id="carouselExampleControls" class="carousel slide news mt-3" data-ride="carousel">
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
                  <img class="card-img-top c-img" alt="IMAGEN POST" src="{{asset("posts/$post->image_post")}}">
                  <h5 class="card-title">{{$post->title_post}}</h5>
                  <div class="card-body">           
                    @foreach ($autor as $key)
                      @if($post->user_id == $key->id)
                        <a href="{{route('profile.show',$key)}}" style="color: var(--redTech);">Por: {{$key->name}}</a>
                      @endif
                    @endforeach
                    @if(Auth::user()->admin)
                      <a href="{{route('adminposts.show',$post->id)}}" class="btn btn-primary ver-mas">Ver publicación</a>
                    @else
                      <a href="{{route('userposts.show',$post->id)}}" class="btn btn-primary ver-mas">Ver publicación</a>
                    @endif
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
</main> 
@endsection
