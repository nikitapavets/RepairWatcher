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
                            <a class="profile" href="/admin/logout">
                                <img src="{{$admin->img}}" alt="{{$admin->first_name}} {{$admin->second_name}}" title="{{$admin->first_name}} {{$admin->second_name}}">
                                <span>{{$admin->first_name}} {{$admin->second_name}}</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </header>

            <section class="dashboard_wrap">
                <nav class="left-menu">
                    <ul>
                        <li>
                            <a href="/admin/repair/add_tech">
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
                            <a href="/admin/repair/tech_list">
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
                            {{$admin_title}}
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