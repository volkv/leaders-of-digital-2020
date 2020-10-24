@php
    /** @var \App\Models\Vacancy $vacancy */
@endphp

@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Вакансия {{$vacancy->name}}  @include('job-type-tag',['jobType'=>$vacancy->jobType] )
                </h1>
                <h2 class="subtitle">
                    {{$vacancy->company->name}}
                </h2>
                Город {{$vacancy->city}}

            </div>
        </div>
    </section>
<div class="box content">

        <h2>Описание</h2>
        <p> {{$vacancy->description}}</p>
</div>

    <div class="box content">
        <h2>Требования</h2>
        <p> {{$vacancy->requirement}}</p>
    </div>

    <div class="box content">
        <h2>Условия</h2>
        <p> {{$vacancy->terms}}</p>
    </div>


@endsection