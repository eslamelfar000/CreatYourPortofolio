@extends('dashboard.adminlte')
@section('content')
<link rel="stylesheet" href="{{asset("/assets/css/home.css")}}">
<link rel="stylesheet" href="{{asset("assets/fontawesome-free-6.1.2-web/css/all.css")}}">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <form action="{{ url('') }}" method="post">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        @endif
                        <div class="inputs">
                            <label for="">Birthday</label>
                            <input type="date" name="birthday" id="">
                        </div>

                        <br>
                        <div class="links">
                            <div class="one-link">
                                <div >
                                    <span>Website</span>
                                </div>
                                <input type="text" placeholder="Enter your Website" name="Website">
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>Phone</span>
                                </div>
                                <input type="text" name="phone" placeholder="Enter your phone">
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>City</span>
                                </div>
                                <input type="text" name="city" placeholder="Enter your city">
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>degree</span>
                                </div>
                                <input type="text" name="degree" placeholder="Enter your degree">
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>FreeLance</span>
                                </div>
                                <input type="text" name="freelance" placeholder="avialble or not">
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>HTML</span>
                                </div>
                                <label for="html">Choose your Percentage:</label>

                                <select id="html" name="html">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>CSS</span>
                                </div>
                                <label for="css">Choose your Percentage:</label>

                                <select id="css" name="css">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>JS</span>
                                </div>
                                <label for="js">Choose your Percentage:</label>

                                <select id="js" name="js">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>PHP</span>
                                </div>
                                <label for="photoshop">Choose your Percentage:</label>

                                <select id="photoshop" name="photoshop">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>PHP</span>
                                </div>
                                <label for="php">Choose your Percentage:</label>

                                <select id="php" name="php">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="one-link">
                                <div >
                                    <span>BOOTSTRAB</span>
                                </div>
                                <label for="bootstrap">Choose your Percentage:</label>

                                <select id="bootstrap" name="bootstrap">
                                    @for ($i = 0 ; $i < 100 ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <input type="submit" value="save">
                        </div>
                        </form>
                </div>
            </div>
            <!-- /.col-md-6 -->
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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
