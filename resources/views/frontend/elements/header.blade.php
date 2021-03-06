<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Bay-View</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend')}}/assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="{{route('index')}}"><img src="{{asset('public/frontend')}}/assets/images/bay-view1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="{{route('index')}}">home</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
