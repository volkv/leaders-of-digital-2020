@extends('layouts.left-menu')

@section('content')

        @each('student.partials.list-item', $students, 'student')

@endsection