@extends('company.cabinet.layout')

@section('content')
    <h2 class="mb-4 is-size-5">Вакансий: <strong>1</strong></h2>

    <button class="button is-primary mb-4">Новая вакансия</button>

    @include('vacancies.partials.card')

@endsection