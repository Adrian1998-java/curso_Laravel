@extends('layouts.app')

@section('title', 'listado de productos')

@section('content')
    <h1 class="mb-4">Catalogo de Productos</h1>
    <div class="row">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-3">
                <x-producto-card
                    :nombre="$producto['nombre']"
                    :precio="$producto['precio']"
                    :description="$producto['description']"
                />
            </div>
        @endforeach
    </div>
@endsection