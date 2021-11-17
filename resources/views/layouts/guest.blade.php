<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header style="background-color: #343a40;">
    
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary px -3 py-2">
                <a class="navbar-brand" href="#">BOOLPRESS</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        
                    </ul>
                    <div>
                        <a class="btn btn-sm btn-outline-light" href="{{route('login')}}">Sign in</a>
                        <a class="btn btn-sm btn-outline-light ml-2" href="{{route('register')}}">Sign up</a>
                    </div>
                </div>
            </nav>
        </header>

        <main style="background-color: white;" class="py-5">
            @yield('content')
        </main>

        <footer class="bg-secondary">
            <div class="container pt-4 pb-4">
                <p class="m-0 text-light">© Company 2017-2021</p>
            </div>
        </footer>
    </div>
    
</body>
</html>
