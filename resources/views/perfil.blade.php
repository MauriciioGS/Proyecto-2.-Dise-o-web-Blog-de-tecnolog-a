@extends('layouts.app')
@section('content')
<main class="main-publicacion mt-4 pt-4 text-center text-light">
	@if($usuario->id == Auth::user()->id)
		<h1 class="titulo mb-4">{{$usuario->name}}</h1>
		<form action="{{route('userupdate.update', $usuario->id)}}" method="POST" enctype="multipart/form-data">
			@method('PATCH')
			@csrf
			@if($usuario->p_image == NULL)	
				<div class="" style="display: inline-flex; flex-wrap: wrap; ">
				<div class="p-4" style="border-style: solid;">
					<label for="file" class="d-block p-2 text-center text-white h5">Agrega una imagen de perfil.</label>
					<input type="file" class="text-white" name="file" enctype>
				</div>		
				</div>	
			@else
				<img src="{{asset("profile_photos/$usuario->p_image")}}" alt="IMAGEN DE PERFIL">
			@endif	
			<div class="pl-xl-5 pr-xl-5 pl-lg-5 pr-lg-5 mt-4 mt-sm-5 text-light mr-5 ml-5 mb-5 text-left" style="font-size: 1.2rem;">
				@if($usuario->descripcion == NULL)
					<label for="p_desc" class="d-block text-left text-white m-0">Agrega una descripción a tu perfil, ¡cuéntanos de tí!</label>
					<textarea name="desc" class="mt-2 w-100 " rows="5" cols="50" placeholder="Ingresa texto"></textarea>
					<input type="submit" value="Guardar cambios" id="submit" class="btn btn-primary bg-redTech text-white" style="align-self: center;">	
				@else
						<div class="p-4" style="border-style: solid; border-color: var(--redTech);">
							<p class="text-center">{{$usuario->descripcion}}</p>
						</div>
			</div>
			@endif				
		</form>
	@else
		<h1 class="titulo mb-4">{{$usuario->name}}</h1>
			@if($usuario->p_image == NULL)	
				<div class="" style="display: inline-flex; flex-wrap: wrap; ">
				<div class="p-4" style="border-style: solid;">
					<img src="{{asset('img/perfil_defaul.png')}}" alt="IMAGEN DEFAULT">					
				</div>						
				</div>								
				<div>El usuario no tiene foto de perfil.</div>
			@else
				<img src="{{asset("profile_photos/$usuario->p_image")}}" alt="IMAGEN DE PERFIL">
			@endif	
			<div class="pl-xl-5 pr-xl-5 pl-lg-5 pr-lg-5 mt-4 mt-sm-5 text-light mr-5 ml-5 mb-5 text-left" style="font-size: 1.2rem;">
				@if($usuario->descripcion == NULL)
					<div class="p-4" style="border-style: solid; border-color: var(--redTech);">
						<p class="text-center">"El usuario no ha agregado una descripción"</p>
					</div>
				@else
					<div class="p-4" style="border-style: solid; border-color: var(--redTech);">
						<p class="text-center">{{$usuario->descripcion}}</p>
					</div>
			</div>
			@endif				
		</form>
	@endif
</main>
@endsection