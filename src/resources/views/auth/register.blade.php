<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('ui/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/animate.css')}}">
    <!-- or the reference on CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('ui/css/css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{asset('ui/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('ui/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('ui/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('ui/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('ui/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/partner.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/loader.css')}}">

</head>

<body>
    <div id="back-car"></div>
    <div id="login">
        <div class="container">
            <div class="container-fluids">
                <div class="container-fluid form-login">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-left">
                                <div class="logo">
                                    <img src="ui/images/about.jpg" alt="Logo">
                                </div>
                                <div class="group-icon">
                                    <div class="icon-item">
                                        <a href="{{ url('auth/google')}}">
                                            <img src="ui/images/logo-google.png" class="img-fluid img-base"
                                                alt="Google">
                                        </a>
                                    </div>
                                    <div class="icon-item">
                                        <a href="{{url('/getInfo-facebook/facebook')}}">
                                            <img src="ui/images/logo-fb.png" class="img-fluid img-base"
                                                alt="Facebook">
                                        </a>
                                    </div>
                                    <div class="icon-item">
                                        <a href="">
                                            <img src="ui/images/logo-apple.png" class="img-fluid img-base"
                                                alt="Apple" style="    position: relative;
    top: -2px;
    left: 1px;
    right: 0;
    bottom: 1px">
                                        </a>
                                    </div>
                                </div>
                                <p>If you already have an account.</p>
                                <a href="{{route('user.login')}}">Sign in</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-right">
                                <div class="logo">
                                    <img src="ui/images/about.jpg" class="img-fluid" alt="Logo">
                                    <h2>Carbook</h2>
                                </div>
                                <div class="form-content p-5">
                                    <form action="{{route('registerotp')}}" method="post" class="request-form"
                                        style="margin-top: -42px;">
                                        @csrf
                                        <div class="form-group">
                                            <input type="usernam" value="{{old('name')}}" name="name"
                                                class="form-control" placeholder="User name">
                                        </div>
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                value="{{old('email')}}">
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" value="{{old('password')}}">
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Confirm password" value="{{old('password_confirmation')}}">
                                        </div>
                                        @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group mt-3">
                                            <input type="submit" class="btn btn-car-b" value="CREATE ACCOUNT">
                                        </div>
                                        <div class="">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{asset('ui/js/jquery.min.js')}}"></script>
    <script src="{{asset('ui/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('ui/js/popper.min.js')}}"></script>
    <script src="{{asset('ui/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ui/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('ui/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('ui/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('ui/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ui/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ui/js/aos.js')}}"></script>
    <script src="{{asset('ui/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('ui/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('ui/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('ui/js/scrollax.min.js')}}"></script>


    <script src="{{asset('ui/js/main.js')}}"></script>


    <script src="{{asset('ui/js/partner.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</body>

</html>