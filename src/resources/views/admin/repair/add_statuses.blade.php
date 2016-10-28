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
                                <li class="ui-state-default">{{$status->status}}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="statuses current">
                    <header class="statuses--header">Нужные статусы</header>
                    <ul id="sortable_current" class="connectedSortable">
                        @foreach($statuses as $status)
                            @if ($status->rang == 1)
                                <li class="ui-state-default">{{$status->status}}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

        <div class="btn-wrap">
            <button type="submit" class="admin-button">Сохранить</button>
        </div>

    </div>

@stop