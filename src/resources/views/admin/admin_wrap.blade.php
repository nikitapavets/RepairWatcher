@extends ('layouts.general')

@section('content')

    <section class="admin_panel">

        <header class="top--menu">
            <nav>
                <ul class="left">
                    <li><a href="#" id="btn-slide-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                </ul>
                <a href="#" class="brand-logo center">AnyComp</a>
                <ul class="right">
                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </header>

        <section class="content_wrap">

            <div class="left--menu slide-on">

                <div class="about_user--wrap">
                    <div class="about_user--avatar" style="background-image: url('{{ $admin->img }}');"></div>
                    <a href="#" class="about_user--name" id="btn-user-settings">
                        <span>{{ $admin->first_name }} {{  $admin->second_name }}</span>
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="about_user--menu menu">

                    <ul>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Профиль</a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Настройки</a></li>
                        <li><a href="admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Выйти</a></li>
                    </ul>

                </div>

                <div class="menu">

                    <ul>
                        <li><a href="/admin"><i class="fa fa-home" aria-hidden="true"></i>Главная</a></li>
                        <li><a href="/admin?section=repair&action=add"><i class="fa fa-plus" aria-hidden="true"></i>Добавить в ремонт</a></li>
                        <li><a href="/admin?section=repair&action=list"><i class="fa fa-wrench" aria-hidden="true"></i>В ремонте</a></li>
                    </ul>

                </div>

            </div>


            <div class="content slide-on">

                @yield('admin_content')

            </div>

        </section>
    </section>

@stop