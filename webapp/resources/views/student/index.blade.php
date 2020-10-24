@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Студенты
                </h1>
                <h2 class="subtitle">
                    Список студентов
                </h2>
            </div>
        </div>
    </section>

        @each('student.partials.list-item', $students, 'student')

@endsection