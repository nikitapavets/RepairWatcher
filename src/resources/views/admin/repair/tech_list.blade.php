@extends ('layouts.admin_layout')

@section('admin_content')

    <div class="admin_repair_tech-list">

        <table>
            <thead>
                <tr>
                    <td>№</td>
                    <td>Статус</td>
                    <td>Техника</td>
                    <td>Код</td>
                    <td>Неисправность</td>
                    <td>Заказчик</td>
                    <td>Начало ремонта</td>
                </tr>
            </thead>
            <tbody>
                @foreach($repairs['paid'] as $repair)
                    @php
                        $receipt_number = $repair->receipt_number;
                        $status = $repair->statuses[0]->status;
                        $title = $repair->title;
                        $token = $repair->token;
                        $fio = $repair->second_name.' '.substr($repair->first_name, 0, 2).'. '.substr($repair->father_name, 0, 2).'.';
                        $diagnosis = $repair->diagnosis;
                        $date = $repair->adopted_in;

                        $fio_full = $repair->second_name.' '.$repair->first_name.' '.$repair->father_name;
                        $address = $repair->address;
                        $tel = $repair->tel;

                        $code = $repair->code;
                        if(empty($code)){
                            $code = '-';
                        }
                        $set = $repair->set;
                        if(empty($set)){
                            $set = '-';
                        }
                        $id = $repair->id;
                        $status_color = 'blue-text';

                    @endphp
                <tr>
                    <td>{{$receipt_number}}</td>
                    <td>
                        <a href="javascript:" class="about_repair_init">{{$status}}</a>
                        <div class="about_repair statuses">
                            @for($i = 0; $i < count($repair->statuses); $i++)
                            <div class="status">
                                <label for="check_status_{{$i}}">
                                    @if($repair->statuses[$i]->done == 0)
                                        <input type="checkbox" id="check_status_{{$i}}" class="check_status" repair-statuses-id="{{$repair->statuses[$i]->id}}">
                                    @else
                                        <input type="checkbox" id="check_status_{{$i}}" class="check_status" repair-statuses-id="{{$repair->statuses[$i]->id}}" checked>
                                    @endif
                                    {{$repair->statuses[$i]->status}}
                                </label>
                            </div>
                            @endfor
                        </div>
                    </td>
                    <td>
                        <a href="javascript:" class="about_repair_init">{{$title}}</a>
                        <div class="about_repair">
                            <div class="about">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#box_solid'></use>
                                </svg>
                                {{$title}}
                            </div>
                            <div class="home">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#qr-code_solid'></use>
                                </svg>
                                {{$code}}
                            </div>
                            <div class="phone">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#chain_solid'></use>
                                </svg>
                                {{$set}}
                            </div>
                        </div>
                    </td>
                    <td>{{$token}}</td>
                    <td>{{$diagnosis}}</td>
                    <td>
                        <a href="javascript:" class="about_repair_init">{{$fio}}</a>
                        <div class="about_repair">
                            <div class="about">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#user_solid'></use>
                                </svg>
                                {{$fio_full}}
                            </div>
                            <div class="home">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#home_solid'></use>
                                </svg>
                                {{$address}}
                            </div>
                            <div class="phone">
                                <svg class="top-menu__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href='#phone_solid'></use>
                                </svg>
                                {{$tel}}
                            </div>
                        </div>
                    </td>
                    <td>{{$date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

@stop