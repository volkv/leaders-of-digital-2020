<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('media/skfu-logo.png') }}">
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
            <a href="{{route('students')}}" class="navbar-item">
                Студенты
            </a>
            <a href="{{route('companies')}}" class="navbar-item">
                Компании
            </a>

            <a  class="navbar-item is-disabled">
                ВУЗы
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-light" href="{{ route('register') }}">
                        <strong>Зарегестрироваться</strong>
                    </a>
                    <a class="button is-primary" href="{{ route('login') }}">
                        Войти
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>