@extends ('admin.admin_wrap')

@section('admin_content')

        @if(isset($_GET['section']) && isset($_GET['action']))
            @include('admin.'.$_GET['section'].'.'.$_GET['action'])
        @endif

@stop
