@extends('layouts.app')
@section('content')
<main class="main-publicacion mt-4 pt-4 text-center text-light">
	<h1 class="titulo mb-4">{{$post->title_post}}</h1>
	<img class="img-post" src="{{asset("posts/$post->image_post")}}" alt="IMAGEN DEL POST">
	<div class="pl-xl-5 pr-xl-5 pl-lg-5 pr-lg-5 mt-4 mt-sm-5 text-light mr-5 ml-5 mb-5 text-left" style="font-size: 1.2rem;">
		<p class="">{{$post->description}}</p>
		<a class="pr-xl-5 pr-lg-5" href="{{route('profile.show',$autor->id)}}" style="float: right; border-style: none; color: var(--redTech); font-size: 1rem;">{{$autor->name}}</a>
		<h2 class="mt-5">Comentarios</h2>
		@foreach($comments as $comment)
			@if($comment->post_id == $post->id)
				<div class="comment p-2 pb-4 bg-darkgrey">
					<p class="p-1">{{$comment->com_content}}</p>
					<a class="link-user" href="{{route('profile.show',$comment->user_id)}}">{{$comment->user_name}}</a>
				</div>
			@endif
		@endforeach
		@if(!Auth::user()->admin)
			<div class="comment p-2 pb-5 bg-darkgrey">
				Haz un comentario: 
				<form class="mx-md-auto" method="POST" action="{{route('usercomment.store')}}" enctype="multipart/form-data">		
				@csrf
					<textarea name="contenido" class="w-100 h-500" rows="2" cols="50" placeholder="¡Hazle saber a la comunidad lo que piensas!"></textarea>
					<div class="publicar" style="float: right;">
						<input type="submit" value="Enviar" id="submit" class="btn btn-primary bg-redTech text-white">	
					</div>					
					<input name="p_id" id="p_id" type="number" value="{{$post->id}}" style="display: none;">
				</form>
			</div>
		@endif
	</div>
</main>	
@endsection