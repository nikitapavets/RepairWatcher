@extends ('layouts.general')

@section('content')

    <div class="admin_login">
        <div class="login--wrap">
            <header class="login--header">
                Авторизация
            </header>
            <div class="login--content">
                {{ Form::open(array('url' => '/admin/check')) }}
                <div class="input-field">
                    <input id="login" type="text" class="admin-input" name="login" placeholder="Логин">
                    <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <use xlink:href='#user_solid'></use>
                    </svg>
                </div>
                <div class="input-field">
                    <input id="password" type="password" class="admin-input" name="password" placeholder="Пароль">
                    <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <use xlink:href='#lock_solid'></use>
                    </svg>
                </div>
                <div class="btn-field">
                    <div class="remember_me">
                        <input type="checkbox" id="filled-in-box" checked="checked" name="remember"/>
                        <label for="filled-in-box">Запомнить</label>
                    </div>
                    <button type="submit" class="admin-button" type="submit">Войти</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop