<!doctype html>
<html lang="en">


<!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 20:34:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('vertical/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
    <script src="https://kit.fontawesome.com/767f8dca2f.js" crossorigin="anonymous"></script>
	<link href="{{url('vertical/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('vertical/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('vertical/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('vertical/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('vertical/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('vertical/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('vertical/assets/css/icons.css')}}" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{url('vertical/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/header-colors.css')}}" />
    {{-- title --}}
    @stack('title')
	{{-- end title --}}
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

            @include('backend.layout.navbar')
            @include('backend.layout.sidebar')

