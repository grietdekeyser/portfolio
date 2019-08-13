<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Griet De Keyser')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <script src="https://kit.fontawesome.com/fb1c64b781.js"></script>
</head>
<body>
    <header>
        @includeWhen(isset($active), 'navigation')    
        @yield('eyecatcher')
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2019 - <a href="https://www.linkedin.com/in/griet-de-keyser" target="_blank"><i class="fab fa-linkedin"></i></a></p>
    </footer>
    @yield('script')
</body>
</html>
