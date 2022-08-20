<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
        <!-- Sidebar toggle button-->
        <div>
            <ul class="nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu"
                        role="button">
                        <i class="nav-link-icon mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="#" data-provide="fullscreen"
                        class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
                        <i class="nav-link-icon mdi mdi-crop-free"></i>
                    </a>
                </li>
                <li class="btn-group nav-item d-none d-xl-inline-block">
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- full Screen -->
                <!-- <li class="search-bar">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </li> -->
                <!-- centre the text -->

                <h5 class="m-auto mr-10">{{ $greeting }} <i class='{{ $icon }}'></i></h5>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0"
                        data-toggle="dropdown" title="User">
                        <img src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/no_image.jpg') }}"
                            alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="{{ route('profile.view') }}"><i
                                    class="ti-user text-muted mr-2"></i> Profil</a>
                            <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Ubah
                                Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Kata
                                Sandi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="hover-danger" href="{{ route('admin.logout') }}"><i
                            class="fa fa-solid fa-arrow-right-from-bracket"></i></a>

                </li>

            </ul>
        </div>
    </nav>
</header>
