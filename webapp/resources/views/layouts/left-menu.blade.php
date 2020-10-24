<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')
<body>
<div id="app" class="container">
    @include('navbar')
    <div class="container section">
        <div class="columns">
            @yield('menu')
            <div class="column is-two-thirds-desktop">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@yield('footer')
</body>
</html>
