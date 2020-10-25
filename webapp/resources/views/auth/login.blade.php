@extends('layouts.app')

@section('content')

        <div class="columns is-centered">
            <div class="column is-one-third-desktop is-half-tablet">
                <div class="box">
                    <h3 class="has-text-centered has-text-weight-bold is-size-5 mb-2">
                        Войти как
                    </h3>
                    @include('auth.partials.logins-tabs')

                    <div class="control has-icons-left has-icons-right mb-2">
                        <input class="input" type="email" value="test@test.demo" placeholder="Email">
                        <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="password" value="test" placeholder="Пароль">
                            <span class="icon is-small is-left">
                                  <i class="fas fa-lock"></i>
                                </span>
                        </p>
                    </div>

                    <form method="POST" action="/">
                        {{ csrf_field() }}
                        <input id="login-as" name="login-as" type="text" value="student" hidden>
                        <div class="buttons is-justify-content-center">
                            <button type="submit" class="button is-primary">
                                <strong>Войти</strong>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
@endsection
