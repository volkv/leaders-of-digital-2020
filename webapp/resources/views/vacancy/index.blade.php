@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Вакансии
                </h1>
                <h2 class="subtitle">
                    Список вакансий
                </h2>
            </div>
        </div>
    </section>

    @each('vacancy.partials.card', $vacancies, 'vacancy')

@include('pagination')
@endsection