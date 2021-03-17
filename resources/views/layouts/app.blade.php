<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>

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
        <nav class="navbar navbar-expand-md navbar-danger bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Portfolio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                School projecten
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/beroepsexamen') }}">Beroepsexamen</a>
                                <a class="dropdown-item" href="{{ url('/keuzedelen') }}">Keuzedelen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/html') }}">HTML & CSS</a>
                                <a class="dropdown-item" href="{{ url('/java') }}">Java</a>
                                <a class="dropdown-item" href="{{ url('/javascript') }}">Javascript</a>
                                <a class="dropdown-item" href="{{ url('/php') }}">PHP</a>


                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/stage') }}">Stage</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kerntaken
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/kerntaken') }}">Kerntaken uitleg</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/kerntaak1') }}">Kerntaak 1</a>
                                <a class="dropdown-item" href="{{ url('/kerntaak2') }}">Kerntaak 2</a>
                                <a class="dropdown-item" href="{{ url('/kerntaak3') }}">Kerntaak 3</a>
                                <a class="dropdown-item" href="{{ url('/kerntaak4') }}">Kerntaak 4</a>


                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/film') }}">Video's</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-gradient-info ">
            <div class="container ">
            @yield('content')
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
</body>
</html>