<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>


        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link" >
                <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>



                <!-- Sidebar -->
                <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                        </div>
                    </div>
                </div> --}}
            <!-- Sidebar -->
            {{-- <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Create Protofilio</a>
                </div>
            </div> --}}

            <!-- SidebarSearch Form -->

            <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <p>Pages<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('viewProfile')}}"
                                    class="nav-link
                                    @if (app('request')->route()->uri() == 'viewProfile') active @endif ">
                                    <p> View Profile</p>
                                </a>
                            </li>
                            <li class="nav-item mb-2">

                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages Home Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- we need insert only one and after that just apdate --}}

                                    <li class="nav-item">
                                        <a href="{{ url('home') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == 'home') active @endif ">
                                            <p>insert home Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('home/edit') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == 'home/edit') active @endif ">
                                            <p>Edit Home Page</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item mb-2">
                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages about Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('about') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == 'about') active @endif ">
                                            <p>About Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('about/edit') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == 'about/edit') active @endif ">
                                            <p>Update About Page</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item mb-2">
                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages Rsumes Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Rsumes Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Update Rsumes Page</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item mb-2">
                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages Servies Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Servies Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Servies Page</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item mb-2">
                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages Protofilio Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Protofilio Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Protofilio Page</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item mb-2">
                                <a href=""
                                    class="nav-link
                                    @if (app('request')->route()->uri() == '') active @endif ">
                                    {{-- <i class=" far fa-circle nav-icon"></i> --}}
                                    <p>manages Contant Pages<i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Contant Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('') }}"
                                            class="nav-link
                                            @if (app('request')->route()->uri() == '') active @endif ">
                                            <p>Contant Page</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
