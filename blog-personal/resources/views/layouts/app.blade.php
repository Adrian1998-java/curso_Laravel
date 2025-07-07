<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog Personal</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content') <!-- Aqui se incluye el contenido de cada página -->
    </main>
    @include('partials.footer')
</body>
</html>