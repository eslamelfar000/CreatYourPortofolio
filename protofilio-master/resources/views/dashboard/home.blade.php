@extends('dashboard.adminlte')
@section('content')
<!-- Content Header (Page header) -->
<link rel="stylesheet" href="{{asset("/assets/css/home.css")}}">
<link rel="stylesheet" href="assets/fontawesome-free-6.1.2-web/css/all.css">

<!-- Main content -->
<div class="content pt-4 px-5">
    <div class="container-fluid">
        <h2>Edit Home Page</h2>
        <div class="row">
            <form action="">
                <div class="inputs">
                    <label for="">Name</label>
                    <input class="" type="text" value="" name="" placeholder="Enter Name">
                </div>
                <div class="inputs">
                    <label for="">Title</label>
                    <input type="text" value="" name="" placeholder="Enter Name">
                </div>
                <br><br>
                <div class="links">
                    <div class="one-link">
                        <div class="icon"> <i class="fa-brands fa-facebook"></i>
                            <span>Facebook</span>
                        </div>
                        <input type="text" value="" placeholder="Enter Facebook Link">
                    </div>
                    <div class="one-link">
                        <div class="icon"> <i class="fa-brands fa-instagram"></i>
                            <span>Instagram</span>
                        </div>
                        <input type="text" value="" placeholder="Enter Instagram Link">
                    </div>
                    <div class="one-link">
                        <div class="icon">
                            <i class="fa-brands fa-twitter"></i>
                            <span>Twitter</span>
                        </div>
                        <input type="text" value="" placeholder="Enter Twitter Link">
                    </div>
                    <div class="one-link">
                        <div class="icon">
                            <i class="fa-brands fa-linkedin"></i>
                            <span>LinkedIn</span>
                        </div>
                        <input type="text" value="" placeholder="Enter LinkedIn Link">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
<!-- /.content -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
@endsection('content')