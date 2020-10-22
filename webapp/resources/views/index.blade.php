@extends('layouts.app')

@section('content')
    <div class="container section">
        <div class="columns is-desktop">
            <div class="column is-two-thirds-desktop">
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
                    @include('index.with-us')
                    @include('index.with-us')
                    @include('index.with-us')
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h3 class="has-text-centered has-text-weight-bold">
                        Новые резюме
                    </h3>
                    <div class="columns level is-mobile mt-2">
                        <div class="column">
                            <figure>
                                <img src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                        </div>
                        <div class="column is-two-thirds">
                            <p>Руслан Мехтиев</p>
                            <p class="is-size-7">МИРЭА</p>
                            <p class="is-size-7">Web-Разработчик</p>
                        </div>
                    </div>
                    <div class="columns level is-mobile mt-2">
                        <div class="column">
                            <figure>
                                <img src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                        </div>
                        <div class="column is-two-thirds">
                            <p>Руслан Мехтиев</p>
                            <p class="is-size-7">МИРЭА</p>
                            <p class="is-size-7">Web-Разработчик</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection