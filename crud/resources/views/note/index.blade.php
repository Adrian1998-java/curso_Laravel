@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- Botón para crear una nueva nota -->
    <div class="mb-4">
        <a class="btn btn-primary" href="{{ route('note.create') }}">Create a new note</a>
    </div>

    <!-- Grid de tarjetas -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse($notes as $note)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ route('note.show',['note'=>$note->id]) }}">{{ $note->title }} 😁👍</a>
                        </h5>
                        <p class="card-text flex-grow-1">{{ $note->description }}</p>

                        <div class="d-flex justify-content-between mt-auto">
                            <a href="{{ route('note.edit',['note'=>$note->id]) }}" class="btn btn-secondary btn-sm">EDIT</a>

                            <form method="POST" action="{{ route('note.destroy',['note'=>$note->id]) }}">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay notas...</p>
        @endforelse
    </div>
</div>

@endsection