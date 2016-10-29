@extends ('layouts.admin_layout')

@section('admin_content')

    <div class="admin_repair_add_statuses">



        <div class="row">
            <div class="col-sm-6">

                <div class="statuses all">
                    <header class="statuses--header">Все статусы</header>
                    <ul id="sortable_all" class="connectedSortable">
                        @foreach($statuses as $status)
                            @if ($status->rang != 1)
                                <li class="ui-state-default">
                                    <input type="hidden" name="{{$status->id}}" value="{{$status->status}}">
                                    {{$status->status}}
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
            {{ Form::open(array('route' => 'admin.repair.save_statuses', 'id' => 'statuses_form')) }}
            <input type="hidden" name="repair_id" value="{{$repair_id}}">
            <div class="col-sm-6">

                <div class="statuses current">
                    <header class="statuses--header">Нужные статусы</header>
                    <ul id="sortable_current" class="connectedSortable">
                        @foreach($statuses as $status)
                            @if ($status->rang == 1)
                                <li class="ui-state-default">
                                    <input type="hidden" name="{{$status->id}}" value="{{$status->status}}">
                                    {{$status->status}}
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
            {{ Form::close() }}
        </div>

        <div class="btn-wrap">
            <button type="submit" form="statuses_form" class="admin-button">Сохранить</button>
        </div>



    </div>

@stop