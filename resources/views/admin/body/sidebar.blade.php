@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/images/logo-dark.png')}}" alt="Logo">
                        <h3><b>Your</b> Brand</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ ($route == 'dashboard')?'active':'' }}">
                <a href="{{ route('dashboard') }}">
                    <i data-feather="grid"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
                <a href="#">
                    <i class="fa fa-light fa-users"></i>
                    <span>Kelola Pengguna</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>Lihat Pengguna</a></li>
                    <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Tambah Pengguna</a></li>
                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
                <a href="#">
                    <i class="fa fa-solid fa-user"></i> <span>Kelola Profil</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Profil Saya</a></li>
                    <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Kata Sandi</a></li>
                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/setup')?'active':'' }}">
                <a href="#">
                    <i class="fa fa-solid fa-gear"></i></i></i><span>Pengaturan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Atur Kelas</a></li>
                    <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Atur Tahun Angkatan</a></li>
                    <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Atur Kelompok</a></li>
                    <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Atur Shift Siswa</a></li>
                    <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Atur Pembiayaan</a></li>
                </ul>
            </li>



            <li class="header nav-small-cap">User Interface</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="settings"></i>
                    <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
                    <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>

                </ul>
            </li>





        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>