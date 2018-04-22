{{--Extendemos el archivo e indicamos quees un layout --}}
@extends('layouts.app'); 
{{-- Definimos la seccion con el nombre que hace referencia en el yield de app.blade.php*/ --}}
@section('content') 
	{{-- Menu de bosstrap --}}
	<div class="jumbotron text-center">
		<h1>Ejemplo Laravel</h1>
		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acerca">Acerca de nosotros</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="row">
		{{-- El forelse sireve para indicar si lavariable es este caso messages viene con datos para hacer el recorrido, si no en el bloque empty muestra lo que tiene alli. --}}
		@forelse ($messages as $message)
			<div class="col-6">
				<img class="img-thumbnail" src="{{ $message['image'] }}">
				<p class="card-text">
					{{ $message['content'] }}
					<a href="/message/{{ $message['id'] }}">Leer mas</a>
				</p>
			</div>
		@empty
			<p>No hay mensajes destacados.</p>
		@endforelse
	</div>
@endsection