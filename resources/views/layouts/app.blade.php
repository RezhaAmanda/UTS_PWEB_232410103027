<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        
    </header>

    <main>
        @yield('content') 
    </main>

    <footer>
        
    </footer>
</body>
</html>
