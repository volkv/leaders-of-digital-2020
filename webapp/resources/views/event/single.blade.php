@php
    /** @var \App\Models\Event $event */
@endphp

@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Событие: {{$event->name}}
                </h1>
                <h2 class="subtitle">
                    <a href="{{$event->university->url}}"> {{$event->university->name}}</a>
                </h2>
             {{$event->city}} {{ $event->date_start->format('d.m.Y') }} - {{ $event->date_end->format('d.m.Y') }}

            </div>
        </div>
    </section>
    <div class="box content">

        <h2>Описание</h2>
        <p> {{$event->description}}</p>
    </div>

    <div class="content">
        <section class="hero">
            <div class="hero-body">
                <div class="container">

                    <h2 class="subtitle">
                        Участники
                    </h2>

                </div>
            </div>
        </section>


        <div class="content">
            <h3>Студенты</h3>
            @each('student.partials.list-card-item', $students, 'student')
        </div>
        <div class="content">
            <h3>Компании</h3>
            @each('company.partials.card',$companies, 'company'  )
        </div>
        <div class="content">
            <h3>Вакансии</h3>
            @each('vacancy.partials.card', $vacancies, 'vacancy')
        </div>


    </div>


@endsection