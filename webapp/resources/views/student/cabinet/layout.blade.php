@extends('layouts.left-menu')

@section('menu')
@include('student.cabinet.profile-menu')
@endsection

@section('content')

@yield('content')

@endsection