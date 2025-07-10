<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>User List:</h1>
    <ul>
        @forelse($users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <p>No hay usuarios</p>
        @endforelse
    </ul>


    <!-- @if($users->isEmpty())
        <p>No hay usuarios</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endif -->
</body>
</html>