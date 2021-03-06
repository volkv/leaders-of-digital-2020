@php
    /** @var \App\Models\University $university */
@endphp

@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="columns">
            <div class="column">
                <figure class="has-text-centered-mobile">
                    <img src="{{ $university->profile_photo_url }}">
                </figure>
            </div>
            <div class="column is-two-thirds has-text-centered-mobile">
                <div class="columns level">
                    <div class="column">
                        <h3 class="is-size-4">{{ $university->name }} ({{ $university->short_name}})</h3>
                    </div>
                    <div class="column">
                        <div class="has-text-centered-desktop">
                            <p class="is-light">Рейтинг</p>
                            <p class="has-text-weight-bold">4,7</p>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Программирование</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Дизайн</span>
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">IT</span>
                </div>
            </div>
        </div>
        <div class="columns mb-4">
            <div class="column">
                <div class="mb-4">
                    <p class="has-text-weight-bold">{{ $university->address }}</p>
                    <p class="is-light has-text-grey">Адрес</p>
                </div>
            </div>
            <div class="column">
                <div class="mb-4">
                    <p class="has-text-weight-bold">{{ $university->phone }}</p>
                    <p class="is-light has-text-grey">Телефон</p>
                </div>
                <div>
                    <p class="has-text-weight-bold">{{ $university->email }}</p>
                    <p class="is-light has-text-grey">E-mail</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column has-text-centered">
                <span class="tag is-medium is-success is-light has-text-weight-bold is-size-5 mb-2">90%</span>
                <p class="is-light has-text-grey">работающих по специальности</p>
            </div>
            <div class="column has-text-centered">
                <span class="tag is-medium is-warning is-light has-text-weight-bold is-size-5 mb-2">30%</span>
                <p class="is-light has-text-grey">состоявших на бирже труда</p>
            </div>
            <div class="column has-text-centered">
                <span class="tag is-medium is-danger is-light has-text-weight-bold is-size-5 mb-2">20 тыс.</span>
                <p class="is-light has-text-grey">средняя зарплата выпускников</p>
            </div>
        </div>


    </div>
    <div class="mb-2">
        <h3 class="is-size-4 has-text-centered mb-4">Студенты</h3>

        @each('student.partials.list-card-item', $students, 'student')
    </div>
@endsection