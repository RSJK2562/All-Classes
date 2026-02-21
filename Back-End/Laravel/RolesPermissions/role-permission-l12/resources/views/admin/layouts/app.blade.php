<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @hasSection('title')
            @yield('title') - Gtechs
        @else
            Gtechs
        @endif
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Gtechs">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.png') }}">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ asset('admin/assets/img/apple-icon.png') }}">

    <!-- Theme Config Js -->
    <script src="{{asset('admin/assets/js/theme-script.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/simplebar/simplebar.min.css') }}">

    <!-- Daterangepicker CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables/css/dataTables.bootstrap5.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" id="app-style">

    @stack('style')

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <!-- Topbar Start -->
        @include('admin.partials.header')
        <!-- Topbar End -->

        <!-- Sidenav Menu Start -->
        @include('admin.partials.sidenav')
        <!-- Sidenav Menu End -->

        <!-- Start Page Content -->

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
                    <div>
                        <h4 class="mb-0">@yield('pageName', '-')</h4>
                    </div>
                    <div class="gap-2 d-flex align-items-center flex-wrap">
                        <a href="javascript:void(0);" class="btn btn-icon btn-outline-light shadow"
                            data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Collapse"
                            data-bs-original-title="Collapse" id="collapse-header"><i
                                class="ti ti-transition-top"></i></a>
                    </div>
                </div>
                <!-- End Page Header -->

                @yield('main')
            </div>
            <!-- End Content -->

            <!-- Start Footer -->
            @include('admin.partials.footer')
            <!-- End Footer -->

        </div>

        <!-- End Page Content -->

    </div>
    <!-- End Wrapper -->


    <!-- jQuery -->
    <script src="{{asset('admin/assets/js/jquery-3.7.1.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{asset('admin/assets/plugins/simplebar/simplebar.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{asset('admin/assets/plugins/datatables/js/jquery.dataTables.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>
    <script src="{{asset('admin/assets/plugins/datatables/js/dataTables.bootstrap5.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Daterangepicker JS -->
    <script src="{{asset('admin/assets/js/moment.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Apexchart JS -->
    <script src="{{asset('admin/assets/plugins/apexchart/apexcharts.min.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>
    <script src="{{asset('admin/assets/plugins/apexchart/chart-data.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Custom Json Js -->
    <script src="{{asset('admin/assets/json/deals-project.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/assets/js/script.js')}}" type="cd313fcb8d79e12bac7593ac-text/javascript"></script>

    <script src="{{ asset('admin/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="cd313fcb8d79e12bac7593ac-|49" defer=""></script>

    @stack('js')
</body>

</html>
