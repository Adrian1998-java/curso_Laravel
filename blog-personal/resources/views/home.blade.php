@extends('layouts.app')

@section('content')
<h2 class="text-center mb-4">Bienvenido a mi Blog</h2>
<div class="row">
    <div class="col-md-4 mb-4">
        <x-articulo-card
            titulo="Artículo 1"
            descripcion="Este es un artículo de prueba" 
        />
    </div>
    <div class="col-md-4 mb-4">
        <x-articulo-card
            titulo="Artículo 2"
            descripcion="Otro artículo de prueba" 
        />

    </div>
    <div class="col-md-4 mb-4">
        <x-articulo-card
            titulo="Artículo 3"
            descripcion="Otro más" 
        />

    </div>
</div>

    <!-- @include('components.articulo-card', [
        'titulo' => 'Articulo 1',
        'descripcion' => 'Este es el articulo 1',
        ])
    @include('components.articulo-card', [
        'titulo' => 'Articulo 2',
        'descripcion' => 'Este es otro articulo',
        ]) -->



@endsection