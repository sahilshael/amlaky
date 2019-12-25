@extends('admin.layout.loginLayout')
@section('title','Admin Reset Password')
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

                        <!-- <h4 class="text-center">Reset Password</h4> -->

                            <form method="post" action="" id="resetpassword" class="md-float-material">
                              @csrf
                              <div class="text-center logo-wrap">
                                <img src="{{url('public/frontend/img/Amlakyw.png')}}" alt="logo.png">
                              </div>
                              <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Reset Password</h3>
                                    </div>
                                </div>
                                <hr/>
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="password" class="form-control ln-input" name="password" id="password" placeholder="New Password">
                                  <div class="input-group-append">
                                    <span class="input-group-text">
                                      <i class="mdi mdi-lock"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="password" class="form-control ln-input" name="confirm_password" placeholder="Confirm Password">
                                  <div class="input-group-append">
                                    <span class="input-group-text">
                                      <i class="mdi mdi-lock"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                             <div class="form-group">
                                  <button type="submit" class="btn btn-outline-success btn-subm">Submit</button>
                              </div>
                              Copyright © 2019   MUMTALIKATI. All rights reserved.
                          </form>
                        </div>
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
<script type="text/javascript">
    $("#resetpassword").validate({    
        error:'label',
        rules:{
            "password":{
                required:true,
                minlength:6
            },
            "confirm_password":{
                required:true,
                minlength:6,
                equalTo: "#password"
            },

        },
        messages:{
            "password":{
                required: 'Please enter new password',
                minlength:"Password Should not be smaller then 6 in length."
            },

            "confirm_password":{
                required: 'Please re-enter new password',
                minlength:"Password Should not be smaller then 6 in length.",
                equalTo : "New password and confirm password should be equal."
           
            }
        },
        errorPlacement: function(error, element){
            error.insertAfter(element.parent());
        }
    });
</script>
@stop