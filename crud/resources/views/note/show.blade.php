@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3>{{ $note->title }}</h3>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $note->description }}</p>
        </div>
        <div class="card-footer text-muted">
            <a href="{{ route('note.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>          

@endsection