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
    @include('navbar')
    @yield('content')
</div>

</body>
</html>
