<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>Your Brand - Pendaftaran </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary dark-skin">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <h2 class="text-white">PENDAFTARAN</h2>
                            <p class="text-white-50">School Management System</p>
                        </div>
                        <div class="p-30 rounded30 box-shadowed b-2 b-dashed">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                                        </div>
                                        <input id="name" type="text" name="name" :value="old('name')" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Nama Lengkap" required autofocus autocomplete="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
                                        </div>
                                        <input id="email" type="email" name="email" :value="old('email')" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
                                        </div>
                                        <input id="password" name="password" type="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Kata Sandi" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
                                        </div>
                                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-12">
                                        <div class="checkbox text-white">
                                            <input type="checkbox" id="basic_checkbox_1">
                                            <label for="basic_checkbox_1">Saya setuju dengan <a href="'.route('terms.show').'" class="text-warning"><b>Syarat & Ketentuan</b> yang berlaku</a></label>
                                        </div>
                                    </div> -->
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-info btn-rounded margin-top-10 ">DAFTAR</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <!-- <div class="text-center text-white">
                                <p class="mt-20">- Daftar Menggunakan -</p>
                                <p class="gap-items-2 mb-20">
                                    <a class="btn btn-social-icon btn-round btn-outline btn-white hover-info" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
                                </p>
                            </div> -->

                            <div class="text-center">
                                <p class="mt-15 mb-0 text-white">Sudah memiliki akun?<a href="{{ route('login') }}" class="ml-5 hover-info"> Masuk</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>


</body>

</html>