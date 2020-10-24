@extends('company.cabinet.layout')

@section('content')
    <h2 class="mb-4 is-size-5">Откликов: <strong>{{ $applications->count() }}</strong></h2>
    @each('company.partials.application-list-card', $applications, 'application')

@endsection