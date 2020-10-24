@php
    /** @var \App\Models\University $university */
@endphp

@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{$workArea->name}}
                </h1>
                <h2 class="subtitle">
                    Рабочая область
                </h2>
            </div>
        </div>
    </section>


    <div class="content">
        <h3>Университеты</h3>
        @each('university.partials.list-item', $universities, 'university')
    </div>
    <div class="content">
        <h3>Студенты</h3>
        @each('student.partials.list-card-item', $students, 'student')
    </div>
    <div class="content">
        <h3>Вакансии</h3>
        @each('vacancy.partials.card', $vacancies, 'vacancy')
    </div>
    <div class="content">
        <h3>Компании</h3>
        @each('company.partials.card',$companies, 'company'  )
    </div>

@endsection