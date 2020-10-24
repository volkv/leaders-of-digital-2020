@extends('layouts.app')

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
    @each('company.partials.card',$companies, 'company'  )


    @include('pagination')
@endsection