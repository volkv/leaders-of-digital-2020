@extends('university.cabinet.layout')

@section('content')

    @each('student.partials.list-item', $students, 'student')

@endsection