@extends('layouts.left-menu')

@section('content')
    <div class="box">
        @each('student.partials.list-item', $students, 'student')
    </div>
@endsection