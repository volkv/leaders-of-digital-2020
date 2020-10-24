<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')
<body>
<div id="app" class="container">
    @include('navbar')
    <div class="container section">
        @yield('content')
    </div>
</div>

@yield('footer')
</body>
</html>
