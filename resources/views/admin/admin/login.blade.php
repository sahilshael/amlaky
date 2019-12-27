@extends('admin.layout.loginLayout')
@section('title','Admin Login')
@section('content')
        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" action="{{url('/admin')}}" id="login" method="post">
                          @csrf
                            <div class="text-center logo-wrap">
                                <img src="{{url('/public/frontend/img/Amlakyw.png')}}" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" >
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" >
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <!-- <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="{{url('admin/forgot-password')}}" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                        <!-- auth-reset-password.html -->
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="cort_txt text-center">
                                            <p>Copyright © <?php echo date('Y'); ?> MUMTALIKATI. All Rights Reserved.</p>
                                        </div>
                                    </div>
                                        <!-- <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p> -->
                                    <!-- <div class="col-md-2"> -->
                                        <!-- <img src="{{url('public/assets/images/unilife-icon.png')}}" alt="small-logo.png"> -->
                                    <!-- </div> -->
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
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
@section('script')

<script>
    $(document).ready(function () {console.log('hello')
        $('#login').validate({ // initialize the plugin    
            rules: {
                  
                email: {
                    required: true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 6

                },

            },
            messages: {
                email: {
                    required: "Please enter email",
                    email: "Invalid email format"

                },
                password:{
                    required: "Please enter Password",
                }

            },                 

        });
    });
</script>

@stop