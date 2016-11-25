$( document ).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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

    // scroll to link
    $("#go-to-contacts").click(function(){
        $("html, body").animate({scrollTop: $(".section__contacts").offset().top}, "slow");
        return false;
    });
    $("#go-to-what-we-do").click(function(){
        $("html, body").animate({scrollTop: $(".section__what-we-do").offset().top}, "slow");
        return false;
    });
    $("#go-to-repair-progress").click(function(){
        $("html, body").animate({scrollTop: $(".section__progress-bar").offset().top}, "slow");
        return false;
    });

    // feedback chat

    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e){
        console.log("Connection establish!");
    }

    conn.onmessage = function(e){
        feedbackFromManager(e.data);
    }

    function send(){
        var data = feedbackToManager();
        conn.send(data);
    }

    function feedbackFromManager(message){

        var new_message_block = '' +
            '<div class="message manager">' +
            '<div class="message__author"></div>' +
            '<div class="message__content">' + message + '</div>' +
            '</div>';
        $('.feedback-chat__body').append(new_message_block);
    }

    function feedbackToManager(){

        var message = $('#feedback-chat__msg').val();
        $('#feedback-chat__msg').val('');

        var new_message_block = '' +
            '<div class="message client">' +
            '<div class="message__author">' +
            '<svg class="contacts-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">' +
            '<use xlink:href="#chat__user"></use>' +
            '</svg>' +
            '</div>' +
            '<div class="message__content">' + message + '</div>' +
            '</div>';
        $('.feedback-chat__body').append(new_message_block);

        return message;
    }

    $('#feedback-chat__send').click(function(event){

        send();

        event.preventDefault();
        return false;
    });

    $('#feedback-chat__msg').keyup(function(event){

        if(event.keyCode == 13) {
            send();
            return false;
        }
    })


    /* Tech list page /admin/repair/tech_list */

    // open user info
    $('.about_repair_init').click(function(){
        $('.about_repair').removeClass('active');
        $(this).next().addClass('active');
    });

    $(document).click(function(event){
        if ($(event.target).closest(".about_repair_init").length) return;
        if ($(event.target).closest(".about_repair").length) return;
        $('.about_repair').removeClass('active');
    });

    // change repair status event
    $('.check_status').change(function(){

        var checked = $(this).is(':checked');
        var repair_status_id = $(this).attr('repair-statuses-id');

        $.post("/admin/repair/update_status",
            {
                'status': checked,
                'status_id': parseInt(repair_status_id)
            });
    });

    /* Add statuses page /admin/repair/add_statuses */

    // statuses drag and drop
    $( "#sortable_all, #sortable_current" ).sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();

});
