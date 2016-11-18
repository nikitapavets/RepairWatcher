@extends ('layouts.general')

@section('content')

    <section class="repair-progress">

        <header class="main-header">

            <div class="contacts">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="location">
                                <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#location'></use>
                                </svg>
                                <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                    РБ, г. Лепель, ул. Ленинская, д. 9, офис 1
                                </a>
                            </div>

                            <div class="phones">

                                <div class="phone">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#phone-call'></use>
                                    </svg>
                                    +375(29)717-58-04
                                </div>

                                <div class="phone">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#phone-call'></use>
                                    </svg>
                                    +375(29)948-41-94
                                </div>

                                <div class="phone">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#circular-clock'></use>
                                    </svg>
                                    Пн-Пт 9:00-18:00, Сб-Вс 9:00-14-00
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="main-navigation">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="main-logo">

                                <a href="/">
                                    <svg class="main-logo__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#wrench_tool'></use>
                                    </svg>
                                    <div class="main-logo__title">
                                        <span class="main-logo__title--first">Repair</span> <span class="main-logo__title--second">Watcher</span>
                                    </div>
                                </a>

                            </div>

                            <nav class="main-menu">

                                <ul class="main-menu__list">
                                    <li><a href="javascript:" id="go-to-repair-progress">Прогресс</a></li>
                                    <li><a href="javascript:" id="go-to-what-we-do">Наши услуги</a></li>
                                    <li><a href="javascript:" id="go-to-contacts">Контакты</a></li>
                                </ul>
                                <a href="javascript:;" class="main-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#menu'></use>
                                    </svg>
                                </a>

                            </nav>

                        </div>
                    </div>
                </div>

            </div>

        </header>

        <div class="current-status section">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="current-status__info">
                            <div class="title">Код</div>
                            <div class="value">{{ $repair->token }}</div>
                        </div>

                        <div class="current-status__info">
                            <div class="title">Техника:</div>
                            <div class="value">{{ $repair->title }}</div>
                        </div>

                        @php

                            $current_step = 0;

                            for($i = 1; $i < count($statuses); $i++){
                                if($statuses[$i-1]->done == 1){
                                    $current_step = $i;
                                }
                            }

                        @endphp

                        <div class="current-status__info">
                            <div class="title">Стадия ({{ $current_step + 1 }}/{{ count($statuses) }})</div>
                            <div class="value">{{ $statuses[$current_step]->status }}</div>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

        </div>

        <div class="progress-bar section section__progress-bar">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <header class="section-header">
                            Прогресс ремонта
                        </header>

                    </div>
                </div>

                @for($i = 0; $i < count($statuses); $i++)

                    <div class="row">
                        <div class="col-md-4 col-sm-4">

                            <div class="step">

                                @php

                                    $class_current_step = '';
                                    if(($i == 0 && $statuses[$i]->done !== 1) || ($i > 0 && $statuses[$i-1]->done == 1)){
                                        $class_current_step = 'now';
                                    }

                                    $class_last = '';
                                    if($i == (count($statuses) - 1)){
                                        $class_last = 'last';
                                    }

                                @endphp

                                <div class="circle__big {{ $class_last }}">

                                    @if($statuses[$i]->done == 1)
                                        <div class="circle__small done">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use xlink:href='#done'></use>
                                            </svg>
                                        </div>
                                    @else
                                        <div class="circle__small {{ $class_current_step }}">{{ $i+1 }}</div>
                                    @endif

                                </div>
                            </div>

                        </div>
                        <div class="col-md-8 col-sm-8">

                            <div class="step-description {{ $class_last }}">
                                <div class="step-description__title">{{ $statuses[$i]->status }}</div>
                                <div class="step-description__value">{{ $statuses[$i]->descr }}</div>
                            </div>

                        </div>
                    </div>

                @endfor

            </div>

        </div>

        <div class="what-we-do section section__what-we-do">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <header class="section-header">
                            Чем мы занимаемся
                        </header>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Компьютерная помощь
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Модернизация компьютера
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Диагностика компьютера
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Восстановление информации
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Установка Windows
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Установка антивируса
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Установка программ
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Установка драйверов
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Настройка Smart TV
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Настройка ByFly
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Настройка Wi-Fi
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Настройка сетей (ЛВС)
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Настройка 1C
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Заправка картриджей
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Ремонт мониторов
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="our-tech">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href='#play-left'></use>
                            </svg>
                            Ремонт планшетов
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="main-footer section section__contacts">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <div class="map hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18358.434522435848!2d28.675018240802505!3d54.88880384118049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTTCsDUzJzE5LjciTiAyOMKwNDEnMzMuMSJF!5e0!3m2!1sru!2sru!4v1477342828151" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">

                        <div class="contacts">

                            <div class="contacts__block">
                                <div class="title">Адресс</div>
                                <div class="value">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#location'></use>
                                    </svg>
                                    <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                        РБ, г. Лепель, ул. Ленинская, д. 9, офис 1
                                    </a>
                                </div>
                            </div>

                            <div class="contacts__block">
                                <div class="title">Телефоны</div>
                                <div class="value">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#phone-call'></use>
                                    </svg>
                                    <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                        +375(29)717-58-04
                                    </a>
                                </div>
                                <div class="value">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#phone-call'></use>
                                    </svg>
                                    <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                        +375(29)948-41-94
                                    </a>
                                </div>
                            </div>

                            <div class="contacts__block">
                                <div class="title">График работы</div>
                                <div class="value">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#circular-clock'></use>
                                    </svg>
                                    <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                        Пн-Пт 9:00-18:00, Сб-Вс 9:00-14-00
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </footer>

    </section>

    <section class="feedback-chat">
        <header>
            Связь с менеджером
        </header>
        <div class="feedback-chat__body">
            <div class="message manager">
                <div class="message__author"></div>
                <div class="message__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, rem.</div>
            </div>
            <div class="message client">
                <div class="message__author">
                    <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <use xlink:href='#chat__user'></use>
                    </svg>
                </div>
                <div class="message__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, rem.</div>
            </div>
        </div>
        <footer>
            <textarea rows="2" placeholder="Ваше сообщение" id="feedback-chat__msg"></textarea>
            <button type="submit" id="feedback-chat__send">
                <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href='#chat__send'></use>
                </svg>
            </button>
        </footer>
    </section>

@stop