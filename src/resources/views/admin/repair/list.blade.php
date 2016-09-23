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