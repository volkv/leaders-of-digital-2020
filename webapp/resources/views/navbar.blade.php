<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('media/logo-new.svg') }}">
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
            <a href="{{route('student.cabinet.index')}}"
               class="navbar-item {{Route::currentRouteName() == 'student.cabinet.index' ? 'is-active':''}}">
                ЛК студента
            </a>
            <a href="#" class="navbar-item {{Route::currentRouteName() == 'company.cabinet.index' ? 'is-active':''}}">
                ЛК компании
            </a>

            <a href="#" class="navbar-item is-disabled">
                ЛК ВУЗа
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                @if(\App\Helpers\NCFU::auth())
                    @if(App\Helpers\NCFU::authIsStudent())
                        <a class="navbar-link">
                            студент-{{\App\Models\Student::first()->name}}
                        </a>
                    @elseif(App\Helpers\NCFU::authIsCompany())
                        <a class="navbar-link">
                            компания-{{\App\Models\Company::first()->name}}
                        </a>
                    @elseif(App\Helpers\NCFU::authIsUniversity())
                        <a class="navbar-link">
                            ВУЗ-{{\App\Models\University::first()->name}}
                        </a>
                    @endif
                    <div class="navbar-dropdown">
                        @if(App\Helpers\NCFU::authIsStudent())
                            <a href="{{route('student.cabinet.index')}}" class="navbar-link">
                                Личный кабинет
                            </a>
                        @elseif(App\Helpers\NCFU::authIsCompany())
                            <a href="{{route('company.cabinet.index')}}" class="navbar-link">
                                Личный кабинет
                            </a>
                        @elseif(App\Helpers\NCFU::authIsUniversity())
                            <a href="{{route('university.cabinet.index')}}" class="navbar-link">
                                Личный кабинет
                            </a>
                        @endif


                        <hr class="navbar-divider">
                        <a href="{{route('logout')}}" class="navbar-item">
                            Выход
                        </a>
                    </div>

                @else
                    <div class="buttons">
                        <a class="button is-light" href="{{ route('register') }}">
                            <strong>Зарегестрироваться</strong>
                        </a>
                        <a class="button is-primary" href="{{ route('login') }}">
                            Войти
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</nav>