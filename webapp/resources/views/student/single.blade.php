@php
    /** @var \App\Models\Student $student */
@endphp

@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="columns">
            <div class="column">
                <figure class="has-text-centered-mobile">
                    <img src="{{$student->profile_photo_url}}">
                </figure>
            </div>
            <div class="column is-two-thirds has-text-centered-mobile">
                <div class="columns level">
                    <div class="column">
                        <h3 class="is-size-4">{{$student->name}}</h3>
                        <p class="has-text-weight-bold has-text-grey">{{$student->university->short_name}}</p>
                    </div>
                    <div class="column">
                        <div class="has-text-centered-desktop mb-2">
                            <p class="is-light">Успеваемость</p>
                            <p class="has-text-weight-bold">{{$student->rating}}</p>
                        </div>
                        <div class="has-text-centered-desktop">
                            <p class="is-light">Рейтинг</p>
                            <p class="has-text-weight-bold">{{$student->rating}}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Программирование</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Дизайн</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Laravel</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">JS</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Vue.js</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="mb-4">
                    <p class="has-text-weight-bold">{{$student->course}}</p>
                    <p class="is-light has-text-grey">Курс</p>
                </div>
                <div>
                    <p class="has-text-weight-bold">{{$student->specialty}}</p>
                    <p class="is-light has-text-grey">Специальность</p>
                </div>
            </div>
            <div class="column">
                <div class="mb-4">
                    <p class="has-text-weight-bold">{{$student->phone}}</p>
                    <p class="is-light has-text-grey">Телефон</p>
                </div>
                <div>
                    <p class="has-text-weight-bold">{{$student->email}}</p>
                    <p class="is-light has-text-grey">E-mail</p>
                </div>
            </div>
        </div>
        <div class="mb-6">
            <h3 class="is-size-4 has-text-centered">Ищу</h3>
            <div class="has-text-centered">
                <span class="tag is-danger is-medium mb-2 mt-2 mr-2">Стажировку</span>
                <span class="tag is-danger is-medium mb-2 mt-2 mr-2">Практику</span>
                <span class="tag is-danger is-medium mb-2 mt-2 mr-2">Трудоустройство</span>
            </div>
        </div>
        <div>
            <h3 class="is-size-4 has-text-centered mb-4">Темы дипломных и курсовых работ</h3>
            <div class="columns is-mobile">
                <div class="column is-two-thirds">
                    <p class="has-text-weight-bold">Разработка мобильного приложения "Календарь"</p>
                    <p class="is-light has-text-grey"> 2 курс</p>
                </div>
                <div class="column">
                    <p class="has-text-weight-bold">5 (отлично)</p>
                    <p class="is-light has-text-grey">Оценка</p>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <p class="has-text-weight-bold">Разработка мобильного приложения "Календарь"</p>
                    <p class="is-light has-text-grey"> 2 курс</p>
                </div>
                <div class="column">
                    <p class="has-text-weight-bold">5 (отлично)</p>
                    <p class="is-light has-text-grey">Оценка</p>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <p class="has-text-weight-bold">Разработка мобильного приложения "Календарь"</p>
                    <p class="is-light has-text-grey"> 2 курс</p>
                </div>
                <div class="column">
                    <p class="has-text-weight-bold">5 (отлично)</p>
                    <p class="is-light has-text-grey">Оценка</p>
                </div>
            </div>
        </div>
        <div>
            <h3 class="is-size-4 has-text-centered mb-4">Стажировки и практики</h3>
            <div class="columns">
                <div class="column is-two-thirds">
                    <p class="has-text-weight-bold"><span></span>ООО "Ромашка Компани" <span class="tag is-info">Практика</span>
                    </p>
                </div>
                <div class="column">
                    <a class="has-text-weight-bold">Отзыв работодателя</a>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <p class="has-text-weight-bold"><span></span>ООО "Ромашка Компани" <span class="tag is-info">Практика</span>
                    </p>
                </div>
                <div class="column">
                    <a class="has-text-weight-bold">Отзыв работодателя</a>
                </div>
            </div>
        </div>
    </div>
@endsection