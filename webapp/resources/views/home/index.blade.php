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

            <div class="column columns has-text-justified-tablet is-justify-content-center is-centered level">
                <div class="column has-text-centered-mobile">
                    <h3 class="is-uppercase is-size-4 has-text-weight-bold">Вам остается только</h3>
                    <h3 class="is-uppercase is-size-4 has-text-weight-bold has-text-primary">Выбрать</h3>
                    <p>Более <strong>1000</strong> вакансий от ведущих работодателей</p>
                    <p>Более <strong>400</strong> резюме талантливых студентов</p>
                    <p>Здесь наши студенты находят самую <strong>важную первую работу</strong>. А работодатели получают <strong>самые перспективные</strong> кадры!</p>
                </div>
                <div class="column is-narrow has-text-centered-mobile">
                    <figure>
                        <img src="{{ asset('media/success-student.png') }}" width="256" height="256">
                    </figure>
                </div>
            </div>
            <div class="columns is-multiline is-centered">
                <div class="column columns is-mobile is-narrow has-text-justified-mobile is-justify-content-center level">
                    <div class="column is-narrow level-item">
                        <figure>
                            <img src="{{ asset('media/student-icon.png') }}" width="120" height="120">
                        </figure>
                    </div>
                    <div class="column is-narrow level-item">
                        <p class="has-text-centered has-text-weight-bold">
                            > 4000 <br/>
                            студентов
                        </p>
                    </div>
                </div>
                <div class="column columns is-mobile is-narrow has-text-justified-mobile is-justify-content-center level">
                    <div class="column is-narrow level-item">
                        <figure>
                            <img src="{{ asset('media/manager-icon.png') }}" width="120" height="120">
                        </figure>
                    </div>
                    <div class="column is-narrow level-item">
                        <p class="has-text-centered has-text-weight-bold">
                            > 100 <br/>
                            работодателей
                        </p>
                    </div>
                </div>
                <div class="column columns is-mobile is-narrow has-text-justified-mobile is-justify-content-center level mb-2">
                    <div class="column is-narrow level-item">
                        <figure>
                            <img src="{{ asset('media/vacancy-icon.png') }}" width="120" height="120">
                        </figure>
                    </div>
                    <div class="column is-narrow level-item">
                        <p class="has-text-centered has-text-weight-bold">
                            > 1000 <br/>
                            вакансий
                        </p>
                    </div>
                </div>
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
            @each('vacancies.partials.card', $vacancies, 'vacancy')
        </div>
        </div>
    </div>
@endsection