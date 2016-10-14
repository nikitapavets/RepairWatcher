@extends ('layouts.general')

@section('content')


    <div class="login_wrap">
        <div class="card">
            <header>
                <h4>Авторизация</h4>
            </header>
            <div class="content">
                {{ Form::open(array('url' => '/admin/check')) }}
                <div class="input-field">
                    <input id="login" type="text" class="validate" name="login">
                    <label for="login">Логин</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Пароль</label>
                </div>
                <div class="btn-filed">
                    <div class="remember_me">
                        <input type="checkbox" id="filled-in-box" checked="checked" name="remember"/>
                        <label for="filled-in-box">Запомнить</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Войти</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


@stop