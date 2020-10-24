@php
    /** @var \App\Models\Company $company */
@endphp

@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="columns">
            <div class="column">
                <figure class="has-text-centered-mobile">
                    <img src="{{ $company->profile_photo_url }}">
                </figure>
            </div>
            <div class="column is-two-thirds has-text-centered-mobile">
                <div class="columns level">
                    <div class="column">
                        <h3 class="is-size-4">{{ $company->name }}</h3>
                    </div>
                    <div class="column">
                        <div class="has-text-centered-desktop">
                            <p class="is-light">Рейтинг</p>
                            <p class="has-text-weight-bold">{{ $company->rating }}</p>
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
        <div>
            <h3 class="is-size-4 has-text-centered-desktop mb-2">О компании</h3>
            <p>{{ $company->about }}</p>
        </div>
        <div>
            <h3 class="is-size-4 has-text-centered-desktop mb-2">Контакты</h3>
            <div>
                <p class="has-text-weight-bold">{{ $company->address }}</p>
                <p class="is-light">Адрес</p>
                <p class="has-text-weight-bold">{{ $company->email }}</p>
                <p class="is-light">E-mail</p>
            </div>
        </div>
        <div class="mb-2">
            <h3 class="is-size-4 has-text-centered mb-4">Рейтинги</h3>
            <div class="columns has-text-centered">
                <div class="column">
                    <div class="notification is-primary is-light">
                        <strong class="is-size-5">1</strong>
                        <p class="has-text-weight-bold">Место</p>
                        <p>По мнению студентов <a>СКФУ</a></p>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-primary is-light">
                        <strong class="is-size-5">1</strong>
                        <p class="has-text-weight-bold">Место</p>
                        <p>По мнению студентов <a>СКФУ</a></p>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-primary is-light">
                        <strong class="is-size-5">1</strong>
                        <p class="has-text-weight-bold">Место</p>
                        <p>По мнению студентов <a>СКФУ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-2">
            <h3 class="is-size-4 has-text-centered mb-4">Вакансии</h3>

                @each('vacancies.partials.card', $company->vacancies, 'vacancy')

        </div>
    </div>
@endsection