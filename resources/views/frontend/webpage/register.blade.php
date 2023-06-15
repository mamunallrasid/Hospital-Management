@extends('frontend.layout.main')
@push('title')
    <title>Register</title>
@endpush
@section('main-content')
        <!-- Begin Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login & Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Begin Login Register Area -->
        <div class="hiraola-login-register_area">
            <div class="container col-md-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <form method="post" id="form_register">
                            <div class="login-form">
                                <h3 class="text-center">Register Now</h3><br>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No*</label>
                                        <input type="text" name="mobile" placeholder="Mobile No" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" placeholder="Captcha" name="captcha" required>
                                    </div>
                                    <div class="col-md-6" style="display:inline-flex">
                                        <span id="captcha_code"> {!! captcha_img() !!}</span>&nbsp;&nbsp;
                                        <div class="input-group-text" id="load" onclick="RefreshCaptch('{{ route('refresh-raptcha') }}')" style="cursor: pointer;height:37px;"><i class="fa fa-solid fa-rotate-right " style="font-size: 15px;"></i></div>
                                    </div>
                                    <div class="col-12">
                                        <button class="hiraola-register_btn" onclick="requestSend($('#form_register'),'{{route('webpage.register-request')}}')">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login Register Area  End Here -->
@endsection
@section('script')
{{-- script --}}
@endsection
