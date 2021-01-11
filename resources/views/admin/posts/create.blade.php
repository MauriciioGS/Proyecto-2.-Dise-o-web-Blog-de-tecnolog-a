@extends('layouts.admin')
@section('content')
<main class="main-crear-publicacion p-4">
	<h1 class="mt-4 mt-sm-5 text-light mb-xl-4 ml-xl-5 mr-xl-5">Nueva Publicación</h1>
	<div class="mt-md-4 mt-4 ml-xl-5 mr-xl-5">
		<form class="mx-md-auto" action="{{route('adminposts.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input class="d-block" type="text" name="title" placeholder="Título de la publicación">
			<textarea name="description" class="mt-4 w-100 h-500" rows="10" cols="50" placeholder="Texto de la publicación. ¡Bienvenida la creatividad!"></textarea>
			<label for="FormControlSelect4" class="d-block text-left text-white">Categoría:</label>
			<select class="form-control w-25" name="cat" id="FormControlSelect4">
			  <option>Tecnología</option>
			  <option>Videojuegos</option>
			  <option>Esports</option>
			</select>
			<label for="file" class="d-block text-left text-white">Agrega una imagen a tu publicación, una buena imagen siempre atrae más público.</label>
			<input type="file" class="text-white" name="file" enctype>
			<input type="submit" value="¡Publicar!" id="submit" class="btn btn-primary bg-redTech text-white ml-5">
		</form>
	</div>
</main>	
@endsection