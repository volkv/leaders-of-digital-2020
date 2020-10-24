
@extends('student.cabinet.layout')

@section('content')

    @each('company.partials.card', $companies, 'company')

@endsection