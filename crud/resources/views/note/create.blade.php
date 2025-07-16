@extends('layouts.app')

@section('content')

        
    <form method='POST' action="{{ route('note.store') }}">
        <div class="mb-3">

            @csrf
            <label for="" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title">
            
            <label for="" class="form-label">Description:</label>
            <input type="text" class="form-control" name="description" >
            
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>

@endsection