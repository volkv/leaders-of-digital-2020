@extends('layouts.app')

@section('content')
    <div class="section container">
        <div class="columns is-centered">
            <div class="column is-one-third-desktop is-half-tablet">
                <div class="box">
                    <h3 class="has-text-centered has-text-weight-bold is-size-5 mb-2">
                        Войти
                    </h3>
                    <p class="has-text-centered mb-2">Еще нет аккаунта? <a>Зарегистрироваться</a></p>
                    <form>
                        <div class="control has-icons-left has-icons-right mb-2">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Пароль">
                                <span class="icon is-small is-left">
                                  <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="buttons is-justify-content-center">
                            <button class="button is-primary">
                                <strong>Войти</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
