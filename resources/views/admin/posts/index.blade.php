@extends('layouts.app')
@section('content')
<main class="main-tecnologia">
	<h1 class="h1-cat">Tecnología</h1>	
	<div class="deco navbar"></div>		
	<div class="cartas row row-cols-1 row-cols-md-1 row-cols-lg-2">
		@foreach($posts as $post)
		@if($post->categoria == "Tecnología")
		<div class="col mb-2 col-12 col-lg-6">			
			<div class="card" style="background-color: black;">
			  <img class="card-img-top c-img" alt="IMAGEN POST 1" src="{{asset("posts/$post->image_post")}}">
			  <h5 class="card-title">{{$post->title_post}}</h5>
			  <div class="card-body">		    				  	
			    <!--<p class="card-text">{{$post->description}}</p>	-->
			    @if(Auth::user()->admin)			    				    
			    	<a href="{{route('adminposts.show',$post->id)}}" class="btn btn-primary ver-mas">Ver publicación</a>
			    @else
			    	<a href="{{route('userposts.show',$post->id)}}" class="btn btn-primary ver-mas">Ver publicación</a>
			    @endif
        		@foreach ($autor as $key)
            		@if($post->user_id == $key->id)
                		<a href="{{route('profile.show',$key)}}" style="float: right; padding-right: 2rem; color: var(--redTech);">Por: {{$key->name}}</a>
            		@endif
        		@endforeach
			    
			  </div>
			</div>			
		</div> 	
		@endif
		@endforeach		
	</div>
	<div class="decob navbar"></div>
</main>
@endsection