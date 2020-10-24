<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item has-text-weight-bold is-size-5" href="{{ route('home') }}">
            МОЙ! СТАРТ
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
           data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="{{route('students')}}"
               class="navbar-item {{Route::currentRouteName() == 'students' ? 'is-active':''}}">
                Студенты
            </a>
            <a href="{{route('companies')}}"
               class="navbar-item {{Route::currentRouteName() == 'companies' ? 'is-active':''}}">
                Компании
            </a>
            <a href="{{route('universities')}}"
               class="navbar-item {{Route::currentRouteName() == 'universities' ? 'is-active':''}}">
                ВУЗы
            </a>
            <a href="{{route('vacancies')}}"
               class="navbar-item {{Route::currentRouteName() == 'vacancies' ? 'is-active':''}}">
                Вакансии
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                @if(\App\Helpers\NCFU::auth())
                    @if(App\Helpers\NCFU::authIsUniversity())
                        <a class="navbar-link is-block">

                            <p class="has-text-weight-bold">{{\App\Models\University::first()->name}}</p>
                            <p class="is-size-7">ВУЗ</p>
                        </a>

                    @elseif(App\Helpers\NCFU::authIsCompany())
                        <a class="navbar-link is-block">

                            <p class="has-text-weight-bold">{{\App\Models\Company::first()->name}}</p>
                            <p class="is-size-7">Компания</p>
                        </a>
                    @elseif(App\Helpers\NCFU::authIsStudent())
                        <a class="navbar-link is-block">
                            <p class="has-text-weight-bold">{{\App\Models\Student::first()->name}}</p>
                            <p class="is-size-7">Студент</p>
                        </a>
                    @endif
                    <div class="navbar-dropdown">
                        @if(App\Helpers\NCFU::authIsStudent())
                            <a href="{{route('student.cabinet.index')}}" class="navbar-item">
                                Кабинет студента
                            </a>
                        @elseif(App\Helpers\NCFU::authIsCompany())
                            <a href="{{route('company.cabinet.index')}}" class="navbar-item">
                                Кабинет работодателя
                            </a>
                        @elseif(App\Helpers\NCFU::authIsUniversity())
                            <a href="{{route('university.cabinet.index')}}" class="navbar-item">
                                Кабинет ВУЗа
                            </a>
                        @endif

                        <hr class="navbar-divider">
                        <a href="{{route('logout')}}" class="navbar-item">
                            Выход
                        </a>
                    </div>

                @else
                    <div class="buttons">

                        <a class="button is-primary" href="{{ route('login') }}">
                            Войти
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</nav>