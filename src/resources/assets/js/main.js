$( document ).ready(function(){

    $("#btn-slide-menu").click(function(event){

        $(".left--menu").attr("style", "transition: 1s ease transform");
        $(".left--menu").toggleClass("slide-on");
        $(".left--menu").toggleClass("slide-off");

        $(".content").attr("style", "transition: 1s ease margin-left");
        $(".content").toggleClass("slide-on");
        $(".content").toggleClass("slide-off");

        event.preventDefault();
    });

    $("#btn-user-settings").click(function(event){

        $(".about_user--menu").slideToggle();
        $("#btn-user-settings i").toggleClass("fa-caret-down");
        $("#btn-user-settings i").toggleClass("fa-caret-up");

        event.preventDefault();
    });

    $('.datepicker').pickadate({
        labelMonthNext: 'Следующий месяц',
        labelMonthPrev: 'Предыдущий месяц',
        labelMonthSelect: 'Выбрать месяц',
        labelYearSelect: 'Выбрать год',
        monthsFull: [ 'Январь', 'Ферваль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ],
        monthsShort: [ 'Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек' ],
        weekdaysFull: [ 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' ],
        weekdaysShort: [ 'Вос', 'Пон', 'Вто', 'Сре', 'Чет', 'Пят', 'Суб' ],
        weekdaysLetter: [ 'Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб' ],
        today: 'Сегодня',
        clear: '',
        close: 'Закрыть',
        firstDay: 1
    });

    $('#showMenu').click(function(){
        $('.progress--header__top-menu').toggleClass('showme');
    });

    $("#to-contacts").click(function(){
        $("html, body").animate({scrollTop: $("#contacts").offset().top + 500}, "fast");
        return false;
    });

    $("#to-hotouse").click(function(){
        $("html, body").animate({scrollTop: $("#hotouse").offset().top}, "fast");
        return false;
    });


    /* Repair progress page /progress */

    // top menu
    $('.main-menu__icon').click(function(){
       $('.main-menu__list').toggleClass('show');
    });

    $(document).click(function(event){
        if ($(event.target).closest(".main-menu__list").length) return;
        if ($(event.target).closest(".main-menu__icon").length) return;
        $('.main-menu__list').removeClass('show');
    });
});