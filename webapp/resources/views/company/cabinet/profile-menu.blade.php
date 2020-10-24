<aside class="menu">
    <p class="menu-label">
        Общее
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'company.cabinet.index' ? 'is-active':''}}"
               href="{{route('company.cabinet.index')}}">Профиль компании</a></li>
    </ul>
    <p class="menu-label">
        Управление
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'company.cabinet.vacancies' ? 'is-active':''}}"
               href="{{route('company.cabinet.vacancies')}}">Вакансии</a></li>
        <li><a class="{{Route::currentRouteName() == 'company.cabinet.applications' ? 'is-active':''}}"
               href="{{route('company.cabinet.applications')}}">Отклики студентов</a></li>
    </ul>
</aside>