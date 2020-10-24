@extends('layouts.app')

@section('content')
    <div class="columns is-desktop">
        <div class="column is-two-thirds-desktop">
            <div class="control has-icons-left has-icons-right">
                <input class="input is-medium" type="email" placeholder="Поиск вакансий">
                <span class="icon is-left">
    <i class="fas fa-search"></i>
  </span>
                <span class="icon is-right">
    <i class="fas fa-check"></i>
  </span>
            </div>

            <div class="column columns has-text-justified-tablet is-justify-content-center is-centered">
                <div class="column has-text-centered-mobile">
                    <h3 class="is-uppercase is-size-4">Вам остается только</h3>
                    <h3 class="is-uppercase is-size-4 has-text-weight-bold">Выбрать</h3>
                    <p>Более 1000 вакансий от ведущих работодателей</p>
                    <p>Более 400 резюме талантливых студентов</p>
                    <p>Здесь наши студенты находят самую важную первую работу. А работодатели бла бла бла</p>
                </div>
                <div class="column is-narrow has-text-centered-mobile">
                    <figure>
                        <img src="https://via.placeholder.com/256">
                    </figure>
                </div>
            </div>
            <div class="columns is-multiline is-centered">
                @include('home.partials.with-us')
                @include('home.partials.with-us')
                @include('home.partials.with-us')
            </div>
            <div class="column">
                <h2 class="title has-text-centered is-size-5">ТОП ВУЗы</h2>
                @each('university.partials.list-item', $universities, 'university')
            </div>

        </div>
        <div class="column">
        <div class="column">
            <h2 class="title has-text-centered is-size-5">Новые резюме</h2>
            @each('student.partials.list-item', $students, 'student')
        </div>

        <div class="column">
            <h2 class="title has-text-centered is-size-5">Лучшие Компании</h2>
            @each('company.partials.card', $companies, 'company')
        </div>


        <div class="column">
            <h2 class="title has-text-centered is-size-5">Последние вакансии</h2>
            @each('vacancies.partials.card', $vacancies, 'vacancies')
        </div>
        </div>
    </div>
@endsection