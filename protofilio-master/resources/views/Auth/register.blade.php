<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="{{asset("/assets/css/login.css")}}">
    <link rel="icon" href="pics/favicon.png">
    <title>Register </title>
</head>

<body>

    <div class="section">
        <div class="sec-cover">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-md-9 col-lg-6 col-xl-5">
                        <div class="sec-col">
                            <h1>register</h1>
                            <div class="google">
                                <a href="#" class="btn sec-google">
                                    <img src="assets/pics/google-icon.svg" alt="">
                                    <span class="google-span">Connect with Google</span>
                                </a>
                            </div>

                            <div class="line">
                                <span class="or">Or</span>
                            </div>


                            <form action="{{url('storeRegister')}}" method="post">
                                @csrf
                                <label for="">Full Name <span class="astric">*</span></label><br>
                                <input type="text" placeholder="Enter Your Full Name" name="name">

                                <br>

                                <label for="">Email <span class="astric">*</span></label><br>
                                <input type="email" placeholder="Enter Your emial" name="email">

                                <br>

                                <label for="">Password <span class="astric">*</span></label><br>
                                <input type="password" placeholder="Password" name="password">


                                <input type="submit">
                            </form>
                            <br>

                            <div class="forget">
                            <a href="/login" class = "sec-a">Already have account..? </a>
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
