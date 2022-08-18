@php
date_default_timezone_set('Asia/Jakarta');
$user = DB::table('users')
    ->where('id', Auth::user()->id)
    ->first();
$words = explode(' ', $user->name);
$name = $words[0];
$date = date('H');
$greeting = '';

if ($date >= 3 && $date < 12) {
    $greeting="Selamat Pagi, " . $name;
    $icon="fa fa-solid fa-cloud-sun";
} elseif ($date >= 12 && $date <= 15) {
    $greeting="Selamat Siang, " . $name;
    $icon="fa fa-solid fa-sun";
} elseif ($date > 15 && $date < 18) {
    $greeting="Selamat Sore, " . $name;
    $icon="fa fa-solid fa-cloud-moon";
} else {
    $greeting="Selamat Malam, " . $name;
    $icon="fa fa-solid fa-moon";
}
@endphp
<!-- end logic -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">
    <title>Your Brand - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://kit.fontawesome.com/6417e0fd1b.js" crossorigin="anonymous"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend/js/pages/alert.js') }}"></script>

    <!-- toaster -->
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            var toastMixin = Swal.mixin({
                toast: true,
                icon: 'success',
                background: '#1A233B',
                title: '',
                animation: false,
                position: 'top-right',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: false,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            switch (type) {
                case 'info':
                    toastMixin.fire({
                        background: '#1A233B',
                        iconColor: '#7a15f7',
                        animation: true,
                        title: "{{ Session::get('message') }}",
                    });
                    break;
                case 'warning':
                    toastMixin.fire({
                        background: '#1A233B',
                        iconColor: '#F18700',
                        animation: true,
                        title: "{{ Session::get('message') }}",
                    });
                    break;
                case 'success':
                    toastMixin.fire({
                        background: '#1A233B',
                        iconColor: '#00BC8B',
                        animation: true,
                        title: "{{ Session::get('message') }}",
                    });
                    break;
                case 'error':
                    toastMixin.fire({
                        background: '#1A233B',
                        icon: 'error',
                        iconColor: '#ef3737',
                        animation: true,
                        title: "{{ Session::get('message') }}",
                    });
                    break;
            }
        @endif
    </script>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script> -->

</body>

</html>
