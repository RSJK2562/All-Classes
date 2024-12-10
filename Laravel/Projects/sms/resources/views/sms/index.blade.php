<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS | Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/jquery-ui-1.13.2.custom/jquery-ui.min.css') }}">
    {{-- CSS --}}
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

        html,
        body {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    {{-- topbar --}}
    @include('sms.layout.topbar')
    <div id="layoutSidenav">
        {{-- sidebar --}}
        @include('sms.layout.sidebar')
        {{-- main --}}
        <div id="layoutSidenav_content">
            <main>
                @yield('sms')
            </main>
        </div>
    </div>
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('assets/jquery-ui-1.13.2.custom/jquery-ui.js') }}"></script>
    {{-- notify js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    @if ($message = session('success'))
        <script>
            $.notify("{{ $message }}", "success");
        </script>
    @endif
    @if ($message = session('error'))
        <script>
            $.notify("{{ $message }}", "error");
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $("#date").datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                maxDate: '3Y',
                minDate: '-3Y',
            });
        });
    </script>
</body>

</html>
