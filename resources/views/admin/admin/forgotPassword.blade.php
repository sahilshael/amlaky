@extends('admin.layout.loginLayout')
@section('title','Admin Forgot Password')
@section('content')
<style type="text/css">

</style>
<div class="theme-loader">
    <div class="loader-track">
        <div class="loader-bar"></div>
    </div>
</div>
<section class="login p-fixed d-flex text-center common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                <!-- <h2 class="text-center mb-4">Login</h2> -->
                    <div class="row justify-content-center">
                        <div class="text-center logo-wrap">
                            
                            <img src="{{url('public/frontend/img/Amlakyw.png')}}" alt="logo.png" class="igm_forg">
                        </div>
                    </div>
                    <!-- <div class="auto-form-wrapper" style="margin-top: 10px;"> -->
                        <div class="auth-box">
                        <h4 class="text-center txt-primary" style="color: black;">Forgot Password</h4>
                        <br>
                        <form class="md-float-material" method="post" action="{{url('/admin/forgot-password')}}" id="forgot_password">
                            @csrf
                            <!-- <input type="hidden" name="remember_token" value="{{ csrf_token() }}"> -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control ln-input" name="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <i class="mdi  mdi-email"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-secondary btn-margin">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <a href="{{url('/admin')}}" class="btn btn-info back-btn" id="to-recover" ><i class="fa fa-lock m-r-5"></i>Back To Login</a>
                                            <button class="btn btn-info lost_password recover-btn" type="submit">Recover</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            Copyright © 2019   Mumtalikati. All rights reserved.
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

@stop