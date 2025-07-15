@extends('layouts.app')

@section('content')

    <a href="{{ route('note.create') }}">Create a new note</a>

    @forelse($notes as $note)
        <li><a href="">{{ $note->title }}</a></li>
    @empty
        <p>No hay notas...</p>
    @endforelse
@endsection