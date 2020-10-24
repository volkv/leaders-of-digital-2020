@php
    /** @var \App\Models\University $university */
@endphp

@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="columns">

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
@endsection