<header class="content--title">
    <p>Добавить в ремонт</p>
</header>

<div class="card">

    {{ Form::open(array('url' => '/admin/maintenance/save')) }}

    <div class="row">
        <div class="col-md-4 col-xs-12">

            <div class="info--product">

                <header class="card--header">
                    <p>Продукт</p>
                </header>

                <div class="input-field">
                    <input id="product_title" type="text" class="validate" name="product_title" pattern="^[а-яА-Я]+$">
                    <label for="product_title">Название</label>
                </div>
                <div class="input-field">
                    <input id="product_code" type="text" class="validate" name="product_code">
                    <label for="product_code">Код</label>
                </div>

            </div>

        </div>
        <div class="col-md-4 col-xs-12">

            <div class="info--person">

                <header class="card--header">
                    <p>Клиент</p>
                </header>

                <div class="input-field">
                    <input id="person_name" type="text" class="validate" name="person_name" pattern="^[а-яА-Я]+$">
                    <label for="person_name">Имя</label>
                </div>
                <div class="input-field">
                    <input id="person_tel" type="tel" class="validate" name="person_tel" pattern="^375(29|33|44)[0-9]{7}$">
                    <label for="person_tel">Номер телефона</label>
                </div>
                <div class="input-field">
                    <textarea id="person_commentary" class="materialize-textarea" name="person_commentary"></textarea>
                    <label for="person_commentary">Комментарий</label>
                </div>

            </div>

        </div>
        <div class="col-md-4 col-xs-12">

            <div class="info--btn">

                <header class="card--header">
                    <p>Условия</p>
                </header>


                <p>
                    <input name="product_maintenance_type" class="with-gap" type="radio" value="paid" id="test1" checked/>
                    <label for="test1">Платный ремонт</label>
                </p>
                <p>
                    <input name="product_maintenance_type" class="with-gap" type="radio" value="free" id="test2"/>
                    <label for="test2">Гарантийный ремонт</label>
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
