@extends('layouts.app')

@section('content')

    <a class="btn btn-primary" href="{{ route('note.create') }}">Create a new note</a>
    
    <div class="container list-group list-group-numbered">
        @forelse($notes as $note)
        <!-- <li><a class="list-group-item" href="">
            <h5 class="mb-1">{{ $note->title }}</h5>
            <p class="mb-1 text-muted">{{ $note->description }} </a></p> | 
            <p class="mb-1"><a class="list-group-item" href="#">EDIT</a></p> | 
            <p class="mb-1"><a class="list-group-item"  href="#">DELETE</a></p>
        </li> -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ route('note.show',['note'=>$note->id]) }}">{{ $note->title }} 😁👍</a></h5>
                <p class="card-text">{{ $note->description }} </p>
                <form method="POST" action="{{ route('note.delete',['note'=>$note->id]) }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-primary" value="DELETE">
                </form>
                <a href="{{ route('note.edit',['note'=>$note->id]) }}" class="btn btn-primary">EDIT</a>
            </div>
        </div>
        @empty
        <p>No hay notas...</p>
        @endforelse
    </div>
@endsection