<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Yotrip - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/ui/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/animate.css') }}">
    <!-- or the reference on CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('public/ui/css/css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('public/ui/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('public/ui/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/ui/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/ui/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('public/ui/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/partner.css') }}">
    <link rel="stylesheet" href="{{ asset('public/ui/css/loader.css') }}">
    <link rel="icon" href="{{ asset('public/ui/images/Yotrip_new2.png') }}" type="image/x-icon" />

</head>


<body>

    <div id="app">
        <main>
            @yield('main-content')
        </main>
    </div>

</body>

</html>
