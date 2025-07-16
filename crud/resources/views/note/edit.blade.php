@extends('layouts.app')

@section('content')
<a class="btn btn-warning" href="{{ route('note.index') }}"> <-- Back </a>
<form method="POST" action="{{ route('note.update', $note->id) }}">
    @method('PUT')
    @csrf <!-- CROSS-SITE REQUESTE FORGERY  -->
    <label>Title:</label>
    <input type="text" name="title" value="{{ $note->title }}" placeholder="Enter title">
    
    <label>Description:</label>
    <input type="text" name="description" value="{{ $note->description }}" id="">

    <input type="submit" value="Update">
</form>


@endsection