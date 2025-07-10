<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Facturas</title>
</head>
<body>
    <h1>Facturas:</h1>
    @forelse($facturas as $f)
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $f['numero'] }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $f['cliente'] }}</h6>
            <p class="card-text">Importe de {{ $f['importe'] }} €</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $f['fecha'] }}</li>
            </ul>
            <!-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> -->
        </div>
        </div>
    @empty
        <p>No hay Facturas para ver</p>
    @endforelse
    
</body>
</html>