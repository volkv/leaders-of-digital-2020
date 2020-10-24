@extends('layouts.left-menu')

@section('menu')
@include('university.cabinet.profile-menu')
@endsection

@section('content')

@yield('content')

@endsection