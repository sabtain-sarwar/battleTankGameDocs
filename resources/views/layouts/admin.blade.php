@include('includes.admin-header')

@include('includes.admin-topnav')

@include('includes.admin-sidenav')

    <div class="container-fluid">
        <div class="row" style="width: auto">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                     @yield('content')
            </div>
        </div>
    </div>

</div>
<!-- /#page-wrapper -->


@include('includes.admin-footer')