@extends ('layouts.general')

@section('content')

    <section class="progress-bar--wrapper">
        <section class="progress-bar--content" style="background-image: url('/img/progress_page/bg_wrap.jpeg');">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="progress--wrap" style="background-image: url('/img/progress_page/bg.jpeg');">

                            <header class="progress--header">

                                <nav class="progress--header__top-menu showme">
                                    <ul>
                                        <li><a href="javascript" id="to-hotouse">Как пользоваться?</a></li>
                                        <li><a href="javascript:" id="to-contacts">Контакты</a></li>
                                    </ul>
                                </nav>
                                <a id="showMenu" class="progress--header__top-menu--ico">
                                </a>
                                <div class="clearfix"></div>

                                <div class="progress--header__title">
                                   <div class="main">Отдали технику в ремонт?</div>
                                   <div class="sub">Следите за ней!</div>
                                </div>

                                <div class="progress--header__search">
                                    <div class="row">
                                        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
                                            {{ Form::open(array('url' => '/progress', 'method' => 'get')) }}
                                                <input type="text" placeholder="Введите код техники" name="token" autocomplete="off">
                                                <button type="submit" class="search-btn"></button>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>

                            </header>

                        </div>

                        <section class="progress--description">

                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-xs-4">
                                            <svg class="tags-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use xlink:href='#news'></use>
                                            </svg>
                                        </div>
                                        <div class="positive--description col-xs-8 ">
                                            Наш сервис поможет Вам всегда быть в курсе последних новостей о вашей технике! Вы будете знать о ней всё!
                                        </div>
                                    </div>

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-xs-4">
                                            <svg class="tags-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use xlink:href='#question'></use>
                                            </svg>
                                        </div>
                                        <div class="positive--description col-xs-8">
                                            Возникли вопросы по ремонту? Хотите уточнить детали? Вам будет доступна связь с нами в любой момент времени!
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-xs-4">
                                            <svg class="tags-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use xlink:href='#brain'></use>
                                            </svg>
                                        </div>
                                        <div class="positive--description col-xs-8">
                                            Думаете, что о вашей технике забыли и она просто лежит на полке? Не волнуйтесь, Вам будет доступен прогресс её ремонта.
                                        </div>
                                    </div>

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-xs-4">
                                            <svg class="tags-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <use xlink:href='#sms'></use>
                                            </svg>
                                        </div>
                                        <div class="positive--description col-xs-8">
                                            Хотите мгновенно забрать технику, по окончанию ремонта? Sms - уведомления помогут Вам в этом!
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </section>

                        <section class="progress--how-to-use" id="hotouse">
                            <header class="progress--section-header blue" id="contacts">
                                Как это работает?
                            </header>

                            <div class="steps">

                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-descr">Вы сдаете технику <b>в ремонт</b>.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-descr">На ваш мобильный телефон приходит <b>смс с кодом</b> доступа.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-descr">Вы заходите на <b>сайт</b> и вводите <b>код</b>.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">4</div>
                                    <div class="step-descr">Весь ход ремонта у нас <b>перед глазами</b>.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">5</div>
                                    <div class="step-descr">Доступна <b>связь</b> с менеджером.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">6</div>
                                    <div class="step-descr">Мгновенное <b>уведомление</b> об окончании ремонта.</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">7</div>
                                    <div class="step-descr">Ваша техника снова <b>у Вас</b>!</div>
                                </div>

                            </div>

                        </section>

                        <section class="progress--contacts" id="contacts">
                            <header class="progress--section-header">
                                Контакты
                            </header>
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="feed-back">
                                                <div class="field-wrap">
                                                    <div class="field-img">
                                                        <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <use xlink:href='#skype'></use>
                                                        </svg>
                                                    </div>
                                                    <div class="field-text">
                                                        anycompteam
                                                    </div>
                                                </div>
                                                <div class="field-wrap">
                                                    <div class="field-img">
                                                        <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <use xlink:href='#viber'></use>
                                                        </svg>
                                                    </div>
                                                    <div class="field-text">
                                                        +375(29)717-58-04
                                                    </div>
                                                </div>
                                                <div class="field-wrap">
                                                    <div class="field-img">
                                                        <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <use xlink:href='#open'></use>
                                                        </svg>
                                                    </div>
                                                    <div class="field-text">
                                                        c6470a@gmail.com
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">

                                            <div class="feed-back">
                                                <div class="field-wrap">
                                                    <div class="field-img">
                                                        <img src="/img/progress_page/mts.png" alt="">
                                                    </div>
                                                    <div class="field-text">
                                                        +375(29)717-58-04
                                                    </div>
                                                </div>
                                                <div class="field-wrap">
                                                    <div class="field-img">
                                                        <img src="/img/progress_page/velcom.png" alt="">
                                                    </div>
                                                    <div class="field-text">
                                                        +375(29)948-41-94
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix margin visible-sm visible-xs"></div>

                                <div class="col-md-6">
                                    
                                    <div class="feed-back">
                                        <div class="field-wrap">
                                            <div class="field-img">
                                                <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <use xlink:href='#telephone'></use>
                                                </svg>
                                            </div>
                                            <div class="field-input">
                                                <input type="tel" placeholder="Ваш номер телефона">
                                            </div>
                                        </div>
                                        <div class="field-wrap">
                                            <div class="field-img">
                                                <svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <use xlink:href='#envelope'></use>
                                                </svg>
                                            </div>
                                            <div class="field-input">
                                                <textarea rows="3" placeholder="Ваше сообщение"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" id="callbackSend">Отправить</button>
                                    </div>
                                    
                                </div>

                            </div>
                        </section>

                </div>
            </div>

        </section>
        <footer class="progress-bar--footer"></footer>
    </section>

    @include('components/feedback_callback')

@stop