<section class="feedback-callback full hidden">
    <header>
        Обратный звонок
        <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href='#callback'></use>
        </svg>
    </header>
    <div class="feedback-callback__body">
        <p>Возникли вопросы? Укажите свой номер телефона, и мы свяжемся с Вами!<br>(Пн-Пт 9:00-18:00, Сб-Вс 9:00-14-00)</p>
        <div class="input-field">
            <input type="text" id="callbackPhone" placeholder="Ваш номер" pattern="[0+9]">
        </div>
        <div class="input-field">
            <input type="text" id="callbackName" placeholder="Ваше имя">
        </div>
    </div>
    <footer>
        <button type="submit" id="callbackSend" >Заказать</button>
        <p class="hidden">Мы Вам скоро перезвоним!</p>
    </footer>
</section>


<a href="#" id="popup_toggle" class="callback-widget" onclick="return false;">
    <div class="circlephone" style="transform-origin: center;"></div>
    <div class="circle-fill" style="transform-origin: center;"></div>
    <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;">
            <section class="feedback-callback short">
                <header>
                    <svg class="contacts__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <use xlink:href='#callback'></use>
                    </svg>
                </header>
            </section>
        </div>
    </div>
</a>
