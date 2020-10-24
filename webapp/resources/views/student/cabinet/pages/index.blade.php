@extends('student.cabinet.layout')
<link rel="stylesheet" href="https://cdn.rawgit.com/octoshrimpy/bulma-o-steps/master/bulma-steps.css">
@section('content')
    <ul class="steps has-content-centered">
        <li class="steps-segment">
            <span class="steps-marker"></span>
            <div class="steps-content">
                <p class="is-size-4">Заполнить профиль</p>
                <p>Создайте и заполните Ваш профиль.</p>
            </div>
        </li>
        <li class="steps-segment is-active">
            <span class="steps-marker"></span>
            <div class="steps-content">
                <p class="is-size-4">Создать резюме</p>
                <p>Заполните формы резюме, чтобы работодателю было проще Вас найти.</p>
            </div>
        </li>
        <li class="steps-segment ">
            <span class="steps-marker"></span>
            <div class="steps-content">
                <p class="is-size-4">Подписаться на вакансии</p>
                <p>Подпишитесь на ваши специальности, чтобы мы нашли Вам лучшие вакансии.</p>
            </div>
        </li>
        <li class="steps-segment">
            <span class="steps-marker"></span>
            <div class="steps-content">
                <p class="is-size-4">Откликнуться на вакансию</p>
                <p>Откликнитесь на вакансию и свяжитесь с работодателем!</p>
            </div>
        </li>

    </ul>

    @include('student.partials.profile-card')

@endsection