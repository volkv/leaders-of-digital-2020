@extends('layouts.left-menu')



@section('content')
    @include('student.cabinet.profile-menu')

@endsection

@section('menu')
    @include('student.cabinet.profile-menu')
@endsection

@section('content')

    @yield('content')
@endsection

@section('footer')
    <script src="https://demo.creativebulma.net/components/tagsinput/1.0/js/bulma-tagsinput.min.js"></script>
    <script>

        BulmaTagsInput.attach();

    </script>
@endsection