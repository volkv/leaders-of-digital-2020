@extends('student.cabinet.layout')

@section('content')

    <div class="field">
        <div class="content">
     <h2>Рекомендованные вакансии</h2>
        </div>
        @each('vacancy.partials.card', $vacancies, 'vacancy')
    </div>
@endsection