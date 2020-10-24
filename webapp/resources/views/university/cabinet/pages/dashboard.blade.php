@extends('university.cabinet.layout')

@section('content')

    <div class="box">
        <h3 class="is-size-4 has-text-centered mb-4">Дашборд</h3>
        <div class="columns is-centered has-text-centered">
            <div class="column">
                <div class="notification is-success is-light">
                    <strong class="is-size-5">520</strong>
                    <p class="has-text-weight-bold">Резюме</p>
                </div>
            </div>
            <div class="column">
                <div class="notification is-success is-light">
                    <strong class="is-size-5">120</strong>
                    <p class="has-text-weight-bold">Вакансий</p>
                </div>
            </div>
            <div class="column">
                <div class="notification is-success is-light">
                    <strong class="is-size-5">2508</strong>
                    <p class="has-text-weight-bold">Трудоустроено</p>
                </div>
            </div>
        </div>
    </div>

@endsection