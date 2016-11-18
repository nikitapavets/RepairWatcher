@extends ('layouts.admin_layout')

@section('admin_content')
    <div class="row">

        {{ Form::open(array('url' => 'admin/repair/save_tech')) }}

        <div class="col-lg-4">
            <div class="person-info">
                <header class="info-header">Клиент</header>
                <label for="person_last_name">
                    <p>Фамилия:</p>
                    <input type="text" id="person_last_name" name="person_second_name" pattern="^[а-яА-Я|ё|Ё]+$" placeholder="Павец" required>
                </label>
                <label for="person_first_name">
                    <p>Имя:</p>
                    <input type="text" id="person_first_name" name="person_first_name" pattern="^[а-яА-Я|ё|Ё]+$" placeholder="Никита" required>
                </label>
                <label for="person_father_name">
                    <p>Отчество:</p>
                    <input type="text" id="person_father_name" name="person_father_name" placeholder="Константинович" pattern="^[а-яА-Я|ё|Ё]+$">
                </label>
                <label for="person_address">
                    <p>Адрес:</p>
                    <input type="text" id="person_address" name="person_address" placeholder="г. Минск, ул. Фроликова, д. 31, кв. 66">
                </label>
                <label for="person_tel">
                    <p>Номер телефона:</p>
                    <input type="tel" id="person_tel" name="person_tel" pattern="^375(29|33|44)[0-9]{7}$" placeholder="375336136132" required>
                </label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="person-info">
                <header class="info-header">Техника</header>
                <label for="product_title">
                    <p>Наименование:</p>
                    <input type="text" id="product_title" name="product_title" placeholder="Ноутбук N510" required>
                </label>
                <label for="product_code">
                    <p>Зав. номер:</p>
                    <input type="text" id="product_code" placeholder="THYF4-GTYR5-45EGT" name="product_code">
                </label>
                <label for="product_set">
                    <p>Комплект:</p>
                    <input type="text" id="product_set" placeholder="Зарядное устройство" name="product_set">
                </label>
                <label for="product_diagnosis">
                    <p>Неисправность:</p>
                    <input type="text" id="product_diagnosis" placeholder="Не работает клавиатура" name="product_diagnosis">
                </label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="person-info">
                <header class="info-header">Дополнительно</header>
                <label for="info_receipt_number">
                    <p>Номер квитанции:</p>
                    <input type="text" id="info_receipt_number" name="info_receipt_number" pattern="[0-9]+" placeholder="150" required>
                </label>
                <label for="info_repair_type_1">
                    <input type="radio" name="info_maintenance_type" value="paid" id="info_repair_type_1" checked>Платный ремонт
                </label>
                <label for="info_repair_type_2">
                    <input type="radio" name="info_maintenance_type" value="free" id="info_repair_type_2">Гарантийный ремонт
                </label>
                <button type="submit" class="admin-button">Добавить</button>
            </div>
        </div>

        {{ Form::close() }}

    </div>
@stop
