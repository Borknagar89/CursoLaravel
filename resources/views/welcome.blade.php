{{--Extendemos el archivo e indicamos quees un layout --}}
@extends('layouts.app'); 
{{-- Definimos la seccion con el nombre que hace referencia en el yield de app.blade.php*/ --}}
@section('content') 
	<div class="title m-b-md">
		Laravel
	</div>

	@if (isset($teacher))
		<p>Profesor: {{ $teacher }}</p>
	@else
		<p>Profesor sin definir</p>
	@endif

	<div class="links">
		@foreach ($links as $link => $text)
			<a href="{{ $link }}">{{ $text }}</a>
		@endforeach
	</div>
@endsection