<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/img/icon/food-and-drink-icon.png') }}" rel="icon" />
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="NVH">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylesheet.css') }}" />
    <link id="color-switcher" type="text/css" rel="stylesheet" href="{{ asset('assets/css/color-teal.css') }}" />
</head>
<body>
    <div class="preloader">
        <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
    </div>
    <div id="main-wrapper" class="oxyy-login-register">
        @yield('content')
    </div>
    <!-- Script --> 
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> 
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
    <!-- Style Switcher --> 
    <script src="{{ asset('assets/js/switcher.min.js') }}"></script> 
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
