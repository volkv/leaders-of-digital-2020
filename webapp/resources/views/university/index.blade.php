@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Университеты
                </h1>
                <h2 class="subtitle">
                    Список ВУЗов
                </h2>
            </div>
        </div>
    </section>

    @each('university.partials.list-item', $universities, 'university')
    @include('pagination')
@endsection