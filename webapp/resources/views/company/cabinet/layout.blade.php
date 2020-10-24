@extends('layouts.left-menu')

@section('menu')
@include('company.cabinet.profile-menu')
@endsection

@section('content')

@yield('content')

@endsection