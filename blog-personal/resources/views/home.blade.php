@extends('layouts.app')

@section('content')
    <h2>Listado de Artículos</h2>

    @include('components.articulo-card', [
        'titulo' => 'Articulo 1',
        'descripcion' => 'Este es el articulo 1',
        ])
    @include('components.articulo-card', [
        'titulo' => 'Articulo 2',
        'descripcion' => 'Este es otro articulo',
        ])


    <!-- <x-articulo-card
        titulo = "Artículo 1"
        descripcion = "Este es un artículo de prueba" 
    />
    <x-articulo-card
        titulo = "Artículo 2"
        descripcion = "Otro artículo de prueba" 
    /> -->


@endsection