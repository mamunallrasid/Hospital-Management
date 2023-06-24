<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{url('vertical/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{url('vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{url('vertical/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('vertical/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{url('vertical/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{url('vertical/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{url('vertical/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{url('vertical/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vertical/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{url('vertical/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{url('vertical/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{url('vertical/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{url('vertical/assets/css/header-colors.css')}}" />
    <script src="https://kit.fontawesome.com/767f8dca2f.js" crossorigin="anonymous"></script>
    @stack('title')
     {{-- <style>
        .frm-d1 {
            background-color: #aff30e24;
            padding: 50px;
            border-radius: 15px;
        }

        .frm-d1 h2 {
            color: #008cff;
            font-weight: 600;
        }

        .box.box-info {
            padding-top: 40px;
        }

        .box.box-info h3.box-title {
            font-size: 22px;
            padding-bottom: 10px;
        }

        .form-group label {
            padding-bottom: 8px;
            margin-top: 15px;
        }



        .form-control {
            display: block;
            width: 100%;
            padding: 10px 26px;
            font-size: 1rem;
            font-weight: 400;
            line-height: 30px;
            color: #1c1c1c;
            background-color: var(--bs-form-control-bg);
            background-clip: padding-box;
            border-radius: 8px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border: 0px;
            box-shadow: 2px 1px 20px 3px #2424a72e;
        }

        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-form-control-bg);
            border-color: #00000000;
            outline: 0;
            box-shadow: 3px 3px 6px 0rem rgb(40 80 179 / 52%);
        }

        input[type="radio"] {
            margin-right: 5px;
            width: 25px;
        }

        label.radcn {
            font-weight: 600;
            font-size: 18px;
        }

        .box-footer {
            padding-top: 40px;
        }
    </style> --}}
</head>

<body>




    <!--wrapper-->
    <div class="wrapper">

        @include('backend.layout.navbar')
        @include('backend.layout.sidebar')
