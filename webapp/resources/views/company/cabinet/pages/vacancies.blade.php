@extends('company.cabinet.layout')

@section('content')
    <button class="button is-primary mb-4">Новая вакансия</button>

    @include('vacancies.partials.card')

@endsection