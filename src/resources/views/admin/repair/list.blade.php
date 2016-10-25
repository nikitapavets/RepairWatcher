<header class="content--title">
    <p>В ремонте</p>
</header>

<div class="row">
    <ul class="tabs">
        <li class="tab col-md-4"><a class="active" href="#maintenance">Ремонт</a></li>
        <li class="tab col-md-4"><a href="#guarantee">Гарантия</a></li>
        <li class="tab col-md-4"><a href="#complete">Готово</a></li>
    </ul>
    <div id="maintenance" class="card table_wrap">
        @php
            $repairs = $repairs_paid;
        @endphp
        @include('admin.repair._repairs_table')
    </div>
    <div id="guarantee" class="card">
        @php
            $repairs = $repairs_free;
        @endphp
        @include('admin.repair._repairs_table')
    </div>
    <div id="complete" class="card">
        @php
            $repairs = $repairs_complete;
        @endphp
        @include('admin.repair._repairs_table')
    </div>
</div>

/*@section('admin_content')

    <header class="content--title">
        <p>Добавить в ремонт</p>
    </header>

    <div class="card">

        {{ Form::open(array('url' => 'repair')) }}

        <div class="row">

            <div class="col-md-4 col-xs-12">

                <div class="info--person">

                    <header class="card--header">
                        <p>Клиент</p>
                    </header>

                    <div class="input-field">
                        <input id="person_second_name" type="text" class="validate" name="person_second_name" pattern="^[а-яА-Я]+$">
                        <label for="person_second_name">Фамилия</label>
                    </div>
                    <div class="input-field">
                        <input id="person_first_name" type="text" class="validate" name="person_first_name" pattern="^[а-яА-Я]+$">
                        <label for="person_first_name">Имя</label>
                    </div>
                    <div class="input-field">
                        <input id="person_father_name" type="text" class="validate" name="person_father_name" pattern="^[а-яА-Я]+$">
                        <label for="person_father_name">Отчество</label>
                    </div>
                    <div class="input-field">
                        <input id="person_address" type="text" class="validate" name="person_address">
                        <label for="person_address">Адрес</label>
                    </div>
                    <div class="input-field">
                        <input id="person_tel" type="tel" class="validate" name="person_tel" pattern="^375(29|33|44)[0-9]{7}$">
                        <label for="person_tel">Номер телефона</label>
                    </div>

                </div>

            </div>
            <div class="col-md-4 col-xs-12">

                <div class="info--product">

                    <header class="card--header">
                        <p>Продукт</p>
                    </header>

                    <div class="input-field">
                        <input id="product_title" type="text" class="validate" name="product_title">
                        <label for="product_title">Наименование</label>
                    </div>
                    <div class="input-field">
                        <input id="product_code" type="text" class="validate" name="product_code">
                        <label for="product_code">Зав. номер</label>
                    </div>
                    <div class="input-field">
                        <input id="product_set" type="text" class="validate" name="product_set">
                        <label for="product_set">Комплектность</label>
                    </div>
                    <div class="input-field">
                        <textarea id="product_diagnosis" class="materialize-textarea" name="product_diagnosis"></textarea>
                        <label for="product_diagnosis">Неисправность</label>
                    </div>

                </div>

            </div>
            <div class="col-md-4 col-xs-12">

                <div class="info--btn">

                    <header class="card--header">
                        <p>Информация</p>
                    </header>

                    <div class="input-field">
                        <input id="info_receipt_number" type="text" class="validate" name="info_receipt_number" pattern="[0-9]+">
                        <label for="info_receipt_number">Номер квитанции</label>
                    </div>
                    <div class="input-field">
                        <input type="date" class="datepicker" name="info_date" id="info_date" data-value="today">
                        <label for="info_date">Дата</label>
                    </div>

                    <p>
                        <input name="info_maintenance_type" class="with-gap" type="radio" value="paid" id="info_maintenance_type1" checked/>
                        <label for="info_maintenance_type1">Платный ремонт</label>
                    </p>
                    <p>
                        <input name="info_maintenance_type" class="with-gap" type="radio" value="free" id="info_maintenance_type2"/>
                        <label for="info_maintenance_type2">Гарантийный ремонт</label>
                    </p>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="button_wrap">
                <button class="btn waves-effect waves-light" type="submit">Добавить</button>
            </div>
        </div>

        {{ Form::close() }}

    </div>

@stop