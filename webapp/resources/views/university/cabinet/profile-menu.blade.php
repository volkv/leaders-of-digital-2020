<aside class="menu">
    <p class="menu-label">
        Общее
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'university.cabinet.index' ? 'is-active':''}}"
               href="{{route('university.cabinet.index')}}">Профиль ВУЗа</a></li>
    </ul>
    <p class="menu-label">
        Управление
    </p>
    <ul class="menu-list">
        <li><a class="{{Route::currentRouteName() == 'university.cabinet.students' ? 'is-active':''}}"
               href="{{route('university.cabinet.students')}}">Студенты</a></li>
    </ul>
</aside>