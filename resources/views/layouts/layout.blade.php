<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knjižnica-App</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Naslovnica</a>
        <a href="{{ route('clans.index') }}">Članovi</a>
        <a href="{{ route('knjigas.index') }}">Knjige</a>
        <a href="{{ route('posudbas.index') }}">Posudbe</a>

        @if (Auth::check())
        <a href="{{ route('home') }}">Logout</a>
        @else
        <a href="{{ route('home') }}">Login</a>
        @endif

    </nav>

    <div class="container">
        @yield('content') <!-- Ovdje će se prikazati sadržaj stranice -->
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Knjižnica-App. Izvorni kod:<a href=https://github.com/zopaj63/knjiznica-app target="_blank">GitHub</a></p>
    </footer>

</body>

</html>