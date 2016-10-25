@extends ('layouts.general')

@section('content')

    <div class="wrapper">
        <div class="content admin_layout">

            <header class="main-header">

                <div class="logo">
                    <div class="logo--svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <use xlink:href='#teamwork'></use>
                        </svg>
                    </div>
                    <div class="logo--label"><span class="any">Any</span><span class="comp">Comp</span></div>
                </div>

                <nav class="top-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#settings_solid'></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#search_solid'></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="profile" href="#">
                                <img src="/img/team/nikita.png" alt="">
                                <span>Никита Павец</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </header>

            <section class="dashboard_wrap">
                <nav class="left-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="item-ico">
                                    <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#plus_solid'></use>
                                    </svg>
                                </div>
                                <div class="item-text">
                                    Добавить в ремонт
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="item-ico">
                                    <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#list_solid'></use>
                                    </svg>
                                </div>
                                <div class="item-text">
                                    Техника в ремонте
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="item-ico">
                                    <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#users_solid'></use>
                                    </svg>
                                </div>
                                <div class="item-text">
                                    Клиенты
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="admin_content--wrap">
                    <div class="admin_content">
                        <header class="admin_content--header">
                            Добавление товара
                        </header>

                        <div class="admin_content--content">
                            @yield('admin_content')
                        </div>
                    </div>
                </div>

            </section>


        </div>
    </div>

@stop