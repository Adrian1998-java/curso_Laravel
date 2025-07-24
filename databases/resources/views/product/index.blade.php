<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/amazingCards.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container cards">
        @forelse($products as $product)
            <article class="card">
                <div>
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->short_description }}</p>
                    <p>{{ $product->price }} €</p>
                </div>
            </article>
        @empty
            <h5>No data...</h5>
        @endforelse
    </div>
 
</body>
</html>