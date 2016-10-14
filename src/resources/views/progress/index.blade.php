@extends ('layouts.general')

@section('content')

    <section class="progress-bar--wrapper">
        <section class="progress-bar--content" style="background-image: url('/img/progress_page/bg_wrap.jpeg');">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="progress--wrap" style="background-image: url('/img/progress_page/bg.jpeg');">

                            <header class="progress--header">

                                <nav class="progress--header__top-menu">
                                    <ul>
                                        <li><a href="#">Как пользоваться?</a></li>
                                        <li><a href="#">Контакты</a></li>
                                    </ul>
                                </nav>
                                <div class="clearfix"></div>

                                <div class="progress--header__title">
                                   <div class="main">Отдали товар в ремонт?</div>
                                   <div class="sub">Следите за ним!</div>
                                </div>

                                <div class="progress--header__search">
                                    <div class="row">
                                        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
                                            <input type="text" placeholder="Введите код товара">
                                            <button type="submit" class="search-btn"></button>
                                        </div>
                                    </div>
                                </div>

                            </header>

                        </div>

                        <div class="progress--description">

                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-sm-4 col-xs-6">
                                            <img src="/img/svg/news.svg" alt="">
                                        </div>
                                        <div class="positive--description col-sm-8 col-xs-6">
                                            Наш сервис поможет Вам всегда быть в курсе последних новостей о вашем товаре! Вы будете знать о нем всё!
                                        </div>
                                    </div>

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-sm-4 col-xs-6">
                                            <img src="/img/svg/question.svg" alt="">
                                        </div>
                                        <div class="positive--description col-sm-8 col-xs-6">
                                            Возникли вопросы по ремонту? Хотите уточнить детали? Вам будет доступна связь с нами в любой момент времени!
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-sm-4 col-xs-6">
                                            <img src="/img/svg/brain.svg" alt="">
                                        </div>
                                        <div class="positive--description col-sm-8 col-xs-6">
                                            Думаете, что о вашем товаре забыли и он просто лежит на полке? Не волнуйтесь, Вам будет доступен прогресс его ремонта.
                                        </div>
                                    </div>

                                    <div class="positive--wrap row">
                                        <div class="positive--img col-sm-4 col-xs-6">
                                            <img src="/img/svg/sms.svg" alt="">
                                        </div>
                                        <div class="positive--description col-sm-8 col-xs-6">
                                            Хотите мгновенно забрать товар, по окончанию ремонта? Sms - уведомления помогут Вам в этом!
                                        </div>
                                    </div>

                                </div>
                            </div>





                        </div>

                </div>
            </div>

        </section>
        <footer class="progress-bar--footer"></footer>
    </section>

@stop