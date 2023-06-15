@extends('frontend.layout.main')
@push('title')
    <title>Login</title>
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
            <div class="container col-md-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                        <!-- Login Form s-->
                        <form action="post" id="form_login">
                            <div class="login-form">
                                <h4 class="login-title">Login</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Captcha" name="captcha" required>
                                      </div>
                                      <div class="col-md-6" style="display:inline-flex">
                                          <span id="captcha_code"> {!! captcha_img() !!}</span>&nbsp;&nbsp;
                                          <div class="input-group-text" id="load" onclick="RefreshCaptch('{{ route('refresh-raptcha') }}')" style="cursor: pointer;height:37px;"><i class="fa fa-solid fa-rotate-right " style="font-size: 15px;"></i></div>
                                      </div>
                                      <div class="col-md-7">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="forgotton-password_info">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="hiraola-login_btn" onclick="requestSend($('#form_login'),'{{route('webpage.login-request')}}')">Login</button>
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
