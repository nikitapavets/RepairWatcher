@extends ('layouts.general')

@section('content')

    <div class="admin_layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <header class="main-header">

                        <div class="logo">
                            <div class="logo--svg">

                            </div>
                            <div class="logo--label"><span class="any">Any</span><span class="comp">Comp</span></div>
                        </div>

                    </header>

                </div>
            </div>
        </div>
    </div>

    @yield('admin_content')

@stop