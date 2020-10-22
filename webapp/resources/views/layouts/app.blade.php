<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="preload" href="/fonts/cq-icon.woff?2" as="font" crossorigin="anonymous">
    <link rel="preload" href="/fonts/ProximaNova-Regular.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="/fonts/ProximaNova-Bold.woff2" as="font" crossorigin="anonymous">

</head>
<body>
<div id="app" class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">

            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="{{route('home')}}">
                    Главная
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('login')}}">
                        Войти
                    </a>
                    <a class="navbar-item" href="{{route('register')}}">
                        Зарегистрироваться
                    </a>

                </div>

            </div>

    </nav>
    @yield('content')
</div>

</body>
</html>
