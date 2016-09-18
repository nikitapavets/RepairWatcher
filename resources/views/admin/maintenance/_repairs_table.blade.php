<table>
    <thead>
    <tr>
        <th data-field="code">№</th>
        <th data-field="title">Наименование</th>
        <th data-field="token">Код</th>
        <th data-field="client">Заказчик</th>
        <th data-field="set">В комплекте</th>
        <th data-field="diagnosis">Дигноз</th>
        <th data-field="date">Сдан в ремонт</th>
        <th data-field="status">Статус</th>
    </tr>
    </thead>

    <tbody>
    @foreach($repairs as $repair)

        @php

            $receipt_number = $repair->receipt_number;
            $title = $repair->title;
            if(!empty($repair->code)){
                $title.' ('.$repair->code.')';
            }
            $fio = $repair->second_name.' '.substr($repair->first_name, 0, 2).'. '.substr($repair->father_name, 0, 2).'.';
            $fio_full = $repair->second_name.' '.$repair->first_name.' '.$repair->father_name;
            $set = $repair->set;
            $diagnosist = $repair->diagnosist;
            $token = $repair->token;
            $date = $repair->adopted_in;
            $address = $repair->address;
            $tel = $repair->tel;
            $status_color = 'blue-text';
            $status = '';
            switch($repair->status){
                case 'repair':
                    $status = 'Ремонт';
                    break;
                case 'complete':
                    $status = 'Готов';
                    $status_color = 'green-text';
                    break;
            }

        @endphp

        <tr>
            <td>{{ $receipt_number }}</td>
            <td>{{ $title }}</td>
            <td><a href="#">{{ strtoupper($token) }}</a></td>
            <td>
                <a href="#" class='dropdown-button' data-activates='{{ 'dropdown'.$receipt_number }}'>
                    {{ $fio }}
                </a>
            </td>
            <td>{{ $set }}</td>
            <td>{{ $diagnosist }}</td>
            <td>{{ $date }}</td>
            <td class="{{ $status_color }}">{{ $status }}</td>

            <!-- Dropdown Structure -->
            <div id='{{ 'dropdown'.$repair->receipt_number }}' class='dropdown-content about_client card'>
                <div class="about_client--field_wrap">
                    <div class="about_client--title">ФИО:</div>
                    <div class="about_client--value">{{ $fio_full }}</div>
                </div>
                <div class="about_client--field_wrap">
                    <div class="about_client--title">Адрес:</div>
                    <div class="about_client--value">{{ $address }}</div>
                </div>
                <div class="about_client--field_wrap">
                    <div class="about_client--title">Номер телефона:</div>
                    <div class="about_client--value">{{ $tel }}</div>
                </div>
            </div>
        </tr>

    @endforeach
    </tbody>
</table>
