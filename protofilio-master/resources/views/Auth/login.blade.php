<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="{{asset("/assets/css/login.css")}}">
    <link rel="icon" href="assets/pics/favicon.png">
    <title>Sign In </title>
</head>

<body>

    <div class="section">
        <div class="sec-cover">
            <div class="container">
                <div class="row">
                    <!-- <div class="logo">
                        <img src="assets/pics/logo-2.png" alt="">
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-11 col-md-9 col-lg-6 col-xl-5 makeCenter">
                        <div class="sec-col">
                            <h1>Login</h1>

                            <div class="google">
                                <a href="#" class="btn sec-google">
                                    <img src="assets\pics\google-icon.svg" alt="">
                                    <span class="google-span">Connect with Google</span>
                                </a>
                            </div>

                            <div class="line">
                                <span class="or">Or</span>
                            </div>
                            <form action="{{url('loginRequest')}}" method="post">
                                @csrf
                                <label for="">Email <span class="astric">*</span></label><br>
                                <input type="text" placeholder="Email" name="email">
                                <br>
                                <label for="">Password <span class="astric">*</span></label><br>
                                <input type="password" placeholder="Password" name="password">
                                <input type="submit" value="Login">
                            </form>
                            <br>

                            <div class="forget">
                                <a href="/register" class="sec-a">Don't have account..? Register</a>
                                <br>
                                <a href="" class="sec-a">Forgot password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
