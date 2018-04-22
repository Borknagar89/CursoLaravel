{{--Extendemos el archivo e indicamos quees un layout --}}
@extends('layouts.app');
{{-- Definimos la seccion con el nombre que hace referencia en el yield de app.blade.php*/ --}}
@section('content')
    <div class="title m-b-md">
        Acerca de nosotros
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection

@section('title')
    Acerca de nosotros | Laravel
@endsection