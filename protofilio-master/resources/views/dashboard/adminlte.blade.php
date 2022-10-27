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
    <link rel="stylesheet" href="{{asset("/assets/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("/assets/dist/css/adminlte.min.css")}}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark" style = "display:flex;justify-content:right;padding:15px 15px 15px 0px;text-align:right">

<<<<<<< Updated upstream:protofilio-master/resources/views/dashboard/adminlte.blade.php

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search">search</i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
=======
            <div class="user-panel d-flex">
                <div class="info" style="padding-right:0px">
                    <a href="#" class="d-block ancor" style="text-decoration:none;color:white;font-weight:600">Alexander Pierce</a>
                </div>
                    <div class="image">
                        <img src="{{asset("assets/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
>>>>>>> Stashed changes:protofilio-master/resources/views/adminlte.blade.php
                    </div>
                </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="box-shadow:0 0px 0px rgba(0,0,0,.25),0 0px 0px rgba(0,0,0,.22) !important">
            <!-- Brand Logo -->
<<<<<<< Updated upstream:protofilio-master/resources/views/dashboard/adminlte.blade.php
            <a href="" class="brand-link">
=======
            <a href="/" class="brand-link" style="padding:17px 10px">
>>>>>>> Stashed changes:protofilio-master/resources/views/adminlte.blade.php
                <img src="{{asset("assets/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset("assets/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Create Protofilio</a>
                    </div>
                </div> -->

                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item mb-2">
                                    <a href="{{url('home')}}" class="nav-link
                                    @if (app('request')->route()->uri()=="home")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('about')}}" class="nav-link
                                    @if (app('request')->route()->uri()== "about")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('resume')}}" class="nav-link
                                    @if (app('request')->route()->uri()== "resume")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Resume Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('services')}}" class="nav-link
                                    @if (app('request')->route()->uri()== "services")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Services Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('proto')}}" class="nav-link
                                    @if (app('request')->route()->uri()== "proto")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Portfolio Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('contant')}}" class="nav-link
                                    @if (app('request')->route()->uri()== "contant")
                                    active
                                    @endif
                                    ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact Page</p>
                                    </a>
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
            @yield('content1')
            @yield('content2')
        </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset("/assets/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("/assets/dist/js/adminlte.min.js")}}"></script>
</body>
</html>
