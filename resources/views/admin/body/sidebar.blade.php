@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('dashboard') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="Logo">
                        <h3><b>My</b> School</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ $route == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i data-feather="grid"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <li class="header nav-small-cap">Pengguna</li>
            @if (Auth::user()->role == 'Admin')
                <li class="treeview {{ $prefix == '/users' ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-light fa-users"></i>
                        <span>Manajemen Pengguna</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>Lihat Pengguna</a></li>
                    </ul>
                </li>
            @endif

            <li class="treeview {{ $prefix == '/profile' ? 'active' : '' }}">
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

            <li class="header nav-small-cap">Kesiswaan</li>
            <li class="treeview {{ $prefix == '/administrations' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-solid fa-book"></i><span>Administrasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Kelas Siswa</a></li>
                    <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Tahun Angkatan</a></li>
                    <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Jurusan</a></li>
                    <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Shift Siswa</a></li>
                    <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Kategori Pembayaran</a></li>
                    <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Kelola Tagihan</a></li>
                    <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Ujian Siswa</a></li>
                    <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>Mata Pelajaran</a></li>
                    <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Kurikulum</a></li>
                    <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Jabatan Sekolah</a></li>
                </ul>
            </li>

            <li class="treeview {{ $prefix == '/students' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-solid fa-graduation-cap"></i>
                    <span>Manajemen Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Pendaftaran Siswa</a>
                    <li><a href="{{ route('roll.generate.view') }}"><i class="ti-more"></i>Roll Generate</a>
                    <li><a href="{{ route('registration.fee.view') }}"><i class="ti-more"></i>Biaya Pendaftaran</a>
                    </li>
                </ul>
            </li>



            <li class="header nav-small-cap">Kepegawaian</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-solid fa-users-gear"></i>
                    <span>Manajemen Pegawai</span>
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
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
