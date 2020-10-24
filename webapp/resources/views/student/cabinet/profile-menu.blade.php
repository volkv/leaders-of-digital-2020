<aside class="menu">
    <p class="menu-label">
        Общее
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'student.cabinet.index' ? 'is-active':''}}" href="{{route('student.cabinet.index')}}">Мой профиль</a></li>
{{--        <li><a>Конструктор резюме</a></li>--}}
    </ul>
    <p class="menu-label">
        Трудоустройство
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'student.cabinet.companies' ? 'is-active':''}}" href="{{route('student.cabinet.companies')}}">Компании</a></li>
{{--        <li><a>Вакансии</a></li>--}}
{{--        <li><a>Мои отклики</a></li>--}}
{{--        <li><a>Просмотры резюме</a></li>--}}
{{--        <li><a>Предложения работодателей</a></li>--}}
{{--        <li><a>Отзывы работодателей</a></li>--}}
    </ul>
    <p class="menu-label">
        Прочее
    </p>
    <ul class="menu-list">
{{--        <li><a>Избранное</a></li>--}}
{{--        <li><a>Лента</a></li>--}}
{{--        <li><a>Ассистент</a></li>--}}
    </ul>
</aside>