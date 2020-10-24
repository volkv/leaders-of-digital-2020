@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    События
                </h1>
                <h2 class="subtitle">
                    Список событий
                </h2>
            </div>
        </div>
    </section>
    @each('event.partials.card',$events, 'event'  )

    @include('pagination')
@endsection