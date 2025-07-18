@extends('layouts.app')

@section('content')


<div class="container mt-4">
    <h1 class="h1">
        PÁGINA DE CITAS
    </h1>
    <div class="mb-4">
        <a class="btn btn-primary" href="{{ route('citas.create') }}">Crea una nueva cita</a>
    </div>
    <div class="row justify-content-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse($citas as $c)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header">{{ $c->FechaHoraCita }}</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                {{ $c->nombreCliente }}
                            </h5>
                            <p class="card-text flex-grow-1">
                                <strong>Motivo : </strong>{{ $c->Motivo }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $c->EstadoCita }}</small>
                        </div>
                    </div>
                </div>
            @empty
            <p>Nada que mostar...</p>
            @endforelse

    </div>
</div>

@endsection