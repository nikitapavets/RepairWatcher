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

                                <a href="#">
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
                                    <li><a href="#">Как пользоваться?</a></li>
                                    <li><a href="#">Контакты</a></li>
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
                            <div class="value">og5sf6</div>
                        </div>

                        <div class="current-status__info">
                            <div class="title">Техника:</div>
                            <div class="value">Принтер HP LaserJet Pro P1102s</div>
                        </div>

                        <div class="current-status__info">
                            <div class="title">Стадия (3/5)</div>
                            <div class="value">Заправка картриджа</div>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

        </div>

        <div class="progress-bar section">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <header class="section-header">
                            Прогресс ремонта
                        </header>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="step">
                            <div class="circle__big">
                                <div class="circle__small done">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#done'></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="step">
                            <div class="circle__big">
                                <div class="circle__small done">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#done'></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="step">
                            <div class="circle__big">
                                <div class="circle__small now">3</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="step">
                            <div class="circle__big">
                                <div class="circle__small">4</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="step">
                            <div class="circle__big last">
                                <div class="circle__small">5</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>

        </div>

        <div class="what-we-do section">

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

        <footer class="main-footer section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">

                        <div class="contacts">

                            <div class="contacts__block">
                                <div class="title">Адресс</div>
                                <div class="value">
                                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href='#location'></use>
                                    </svg>
                                    <a href="https://www.google.ru/maps/place/54%C2%B053'19.7%22N+28%C2%B041'33.1%22E/@54.888794,28.6906765,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d54.888794!4d28.692517" target="_blank">
                                        РБ, г. Лепель,ул. Ленинская, д. 9, офис 1
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

@stop