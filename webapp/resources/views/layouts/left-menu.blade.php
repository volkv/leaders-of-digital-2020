<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')
<body>
<div id="app" class="container">
    @include('navbar')
    <div class="container section">
        <div class="columns">
            <div class="column">
                @yield('menu')
            </div>
            <div class="column is-three-quarters-desktop">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@yield('footer')
</body>
</html>
