<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">
    <title>Your Brand - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css')}}">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        @include('admin.body.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.body.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('admin')
        <!-- /.content-wrapper -->

        @include('admin.body.footer')

        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

    <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/data-table.js') }}"></script>

    <!-- {Your Brand} Admin App -->
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>


</body>

</html>