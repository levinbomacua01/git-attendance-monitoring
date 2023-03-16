<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/themes/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/themes/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/themes/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/themes/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/themes/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/themes/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/themes/images/favicon.png') }}" />

    <!-- plugins:js -->
    <script src="{{ asset('assets/themes/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/themes/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/themes/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/themes/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/themes/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/themes/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/themes/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/themes/js/template.js') }}"></script>
    <script src="{{ asset('assets/themes/js/settings.js') }}"></script>
    <script src="{{ asset('assets/themes/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/themes/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/themes/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

</head>
<body>

  <div class="container-scroller">

        @include('layouts/navbar')

        <div class="container-fluid page-body-wrapper">

            @include('layouts/settings')
            @include('layouts/right-sidebar')
            @include('layouts/sidebar')

            <div class="main-panel">

                @yield('content')

                @include('layouts/footer')

            </div>

        </div>

  </div>

</body>
</html>
