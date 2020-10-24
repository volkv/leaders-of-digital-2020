@extends('layouts.left-menu')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Комании
                </h1>
                <h2 class="subtitle">
                    Список компаний
                </h2>
            </div>
        </div>
    </section>
    @foreach($companies as $company)

            @include('company.partials.card', ['company' => $company])

    @endforeach
@endsection