<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Sabah Credit Corporation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SCC Advance Salary System" name="description" />
    <meta content="Ardiansyah" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}"> --}}
    <link rel="icon" href="{{ URL::asset('assets/images/scc_logo2.png') }}">
    @include('layouts.head-css')
</head>

@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.scc-sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
</body>

</html>
