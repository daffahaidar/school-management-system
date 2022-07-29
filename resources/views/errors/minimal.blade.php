<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>@yield('title') </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary dark-skin">

    <section class="error-page h-p100">
        <div class="container h-p100">
            <div class="row h-p100 align-items-center justify-content-center text-center">
                <div class="col-lg-7 col-md-10 col-12">
                    <div class="b-dashed border-white rounded30">
                        <h1 class="text-white font-size-180 font-weight-bold error-page-title">@yield('code')</h1>
                        <h1 class="text-white">@yield('message')</h1>
                        <h3 class="text-white">@yield('detail')</h3>
                        <div class="my-30"><a href="{{ route('dashboard') }}" class="btn btn-info btn-rounded">Kembali ke halaman utama</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>


</body>

</html>