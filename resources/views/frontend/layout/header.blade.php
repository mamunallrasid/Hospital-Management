<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- title --}}
    @stack('title')
	{{-- end title --}}
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/webpage/assets/images/favicon.ico') }}">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/font-awesome.min.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/fontawesome-stars.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/ionicons.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/slick.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/animate.min.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/jquery-ui.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/nice-select.min.css') }}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/timecircles.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{url('vertical/assets/vendor/libs/toast/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('vertical/assets/vendor/libs/toast/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('vertical/assets/vendor/libs/sweetalert/sweetalert2.min.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{url('vertical/assets/vendor/fonts/fontawesome.css')}}" />


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ url('frontend/webpage/assets/css/style.min.css') }}"> -->
<style>
    .error{
        color: red;
    }
</style>
</head>

<body class="template-color-3">
    <div class="main-wrapper">

     @include('frontend.layout.navbar')
