@extends('layouts.left-menu')

@section('content')

    @each('university.partials.list-item', $universities, 'university')

@endsection