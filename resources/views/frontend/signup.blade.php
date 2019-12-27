@extends('frontend.layout.signupLayout')
@section('title','Signup')
@section('content')
	<section class="wrap_innr_amlaky signup_page">
        <div class="container">
            <!--  -->
            <div class="sec_heading Innr text-left">
                <?php 
                    if($type == 'landlord'){
                        $typee = 'Property Management System(PMS)';
                    }else{
                        $typee = 'Teanant';
                    }
                ?>
                <h2>Create your Account in {{$typee}}</h2>
            </div>
            <div class="signup_wrp">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="wrp_inr_registr form_sgnup">
                            <div class="col-sm-8 offset-2">
                                <div class="tabs_amlaky">
                                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="home" aria-selected="true">Sign Up</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#login" role="tab" aria-controls="profile" aria-selected="false">Log In</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="tabs_innr">
                                                <!--  -->
                                                <form action="{{url('/signup')}}" id="signup-form" class="" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="hidden" value="{{$type}}" name="type">
                                                            <div class="form-group pos_rel">
                                                                <label>First Name</label>
                                                                <input type="text" name="first_name" placeholder="Enter first name" class="form-control">
                                                                <!-- <i class="fa fa-user"></i> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group pos_rel">
                                                                <label>Last Name</label>
                                                                <input type="text" name="last_name" placeholder="Enter last name" class="form-control">
                                                                <!-- <i class="fa fa-user"></i> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Email Address</label>
                                                        <input type="text" name="email" placeholder="Enter email address" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Mobile Number</label>
                                                        <input type="text" name="contact" placeholder="Enter mobile number" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Password</label>
                                                        <input type="password" name="password" placeholder="Enter password" id="pass" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="confirm_password" placeholder="Enter confirm password" class="form-control" >
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Company (Optional)</label>
                                                        <input type="text" name="company" placeholder="Enter company name" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Number of Property Managed</label>
                                                        <input type="text" placeholder="Enter no. of properties managed" name="properties_managed" class="form-control" >
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <!-- <button class="btn btn-primary sbmt_frm" type="button" data-toggle="modal" data-target="#otp_mod">Sign Up</button> -->
                                                         <button class="btn btn-primary sbmt_frm" type="submit">Sign Up</button>
                                                    </div>
                                                </form>
                                                <!--  -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="tabs_innr">
                                                <!--  -->
                                                <form action="{{url('login')}}" id="login_form" class="" method="POST">
                                                    <div class="form-group pos_rel">
                                                        @csrf
                                                        <label>Email Address</label>
                                                        <input type="text" name="email" placeholder="Enter email address" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="form-group pos_rel">
                                                        <label>Password</label>
                                                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                                                        <!-- <i class="fa fa-user"></i> -->
                                                    </div>
                                                    <div class="forg_link text-right">
                                                    	<a href="{{url('forgot-password')}}" class="my_link">forgot password</a>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary" type="submit">Log In </button> 
                                                    </div>
                                                </form>
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wrp_inr_registr plan_sgnup" id="plan_sgnup">
                            <!--  -->
                            <div class="top_img">
                                <img src="{{asset('public/frontend/img/prop3.jpeg')}}" class="img-fluid" />
                            </div>
                            <div class="plan_points">
                                <p class="cnt_pl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul type="none">
                                    <li><i class="fa fa-check"></i> Excepteur sint occaecat cupidatat non</li>
                                    <li><i class="fa fa-check"></i> Ut enim ad minim veniam</li>
                                    <li><i class="fa fa-check"></i> Excepteur sint occaecat cupidatat non</li>
                                    <li><i class="fa fa-check"></i> sed do eiusmod tempor incididunt ut labore</li>
                                    <li><i class="fa fa-check"></i> Excepteur sint occaecat cupidatat non</li>
                                    <li><i class="fa fa-check"></i> dolore eu fugiat nulla pariatur</li>
                                </ul>
                                <div class="form-group text-left">
                                    <button class="btn btn-primary">Change Plan</button>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </section>

    <!-- OTP Modal -->
    <div class="modal modal_fit" id="otp_mod">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h4 class="modal-title">Enter OTP</h4>
                    <button type="button" class="close close_otp" >&times;</button>
                </div>

                <div class="modal-body text-center">
                    <p class="text-center">Enter the code sent to your registered email id for verification 00:59s</p>
                    <div class="from_reset">
                        <form action="{{url('verify-otp')}}" id="otp_form" method="POST" role="form">
                            <div class="col-sm-12">
                                <div class="clearfix text-center otp_fields">
                                    @csrf
                                    <input type="hidden" name="user_id" id="created_usr" value="">
                                    <input type="hidden" name="otp" id="otp" value="">
                                    <input type="text" class="form-control inpt_otp" minlength="1" maxlength="1" />
                                    <input type="text" class="form-control inpt_otp" minlength="1" maxlength="1" />
                                    <input type="text" class="form-control inpt_otp" minlength="1" maxlength="1" />
                                    <input type="text" class="form-control inpt_otp" minlength="1" maxlength="1" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- <a class="btn btn-primary" href="javascript:;">Submit</a> -->
                    <button type="submit" id="otp_submt" class="btn btn-primary" disabled="">Submit</button>
                    <button type="submit" class="btn btn-danger close_otp">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <!-- OTP Modal -->
    <!-- Signup successfully modal -->
        <div class="container">
            <div class="modal fade" id="pwd_update">
                <div class="modal-dialog profile_mdal">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close close_otp">&times;</button>
                             <div class="modal-img text-center">
                                <img src="{{asset('public/frontend/img/checkmark-2.gif')}}" alt="gif-image">
                                <p>Profile created successfully</p>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End -->

@stop
@section('scripts')
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#login_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: 'Please enter email address',
                        email: 'Please Enter a valid email',
                    },
                    password: {
                        required: 'Please enter password'
                    }
                }
            })

            $('.close_otp').click(function(){
                $('#otp_mod').hide();    
                $('#pwd_update').modal('hide');    
            })


            $('.inpt_otp').keyup(function(){
                var reqlength = $('.inpt_otp').length;
                console.log(reqlength);
                var value = $('.inpt_otp').filter(function () {
                    return this.value != '';
                });
                console.log(value);
                if (value.length>=0 && (value.length == reqlength)) {
                    
                    console.log('removed');
                    $('#otp_submt').removeAttr("disabled");
                } else {
                    $('#otp_submt').attr("disabled", "disabled");
                    console.log('Please fill out all required fields.');
                }
            })

            $('#otp_submt').click(function(){
                var inputs = $(".inpt_otp");
                var otp_arr = [];
                var final = {};
                for(var i = 0; i < inputs.length; i++){
                    otp_arr.push($(inputs[i]).val());
                }
                var str = otp_arr.join('');
                $('#otp').val(str);

                $.ajax({
                    url: "{{url('verify-otp')}}",
                    method: 'post',
                    data: $('#otp_form').serialize(),
                    success: function(response){
                        if (response.status == 'true') {
                            $('#otp_mod').hide();
                            $('#pwd_update').modal('show');
                        }
                        if(response.status == 'false'){
                            alert(response.message);
                        }
                    },error: function (errorMessage) { // error callback 
                        console.log('Error: ' + errorMessage);
                    }
                });
            })

            $('#signup-form').validate({
                rules: {
                    first_name: 'required',
                    last_name: 'required',
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: "{{url('check-email')}}",
                            type: 'post'
                        }
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    contact: {
                        required: true,
                        number: true,
                    },
                    confirm_password: {
                        required: true, 
                        equalTo: "#pass" 
                    },
                    properties_managed: {
                        required: true,
                        number: true,
                    }
                },
                messages: {
                    first_name: 'This field is required',
                    last_name: 'This field is required',
                    email: {
                        required: 'Please enter email address',
                        email: 'Please Enter a valid email',
                        remote: 'Email id already exists'
                    },
                    password: {
                        required: 'Password is required',
                        minlength: "password contains at least 6 digits",

                    },
                    contact: {
                        required: "Mobile number is required",
                        number: "Please enter digits only",
                    },
                    confirm_password: {
                        required: "Confirm password is required",  
                        equalTo: "Confirm password must be same as password"
                    },
                    properties_managed: {
                        required: "Please enter number of properties managed",
                        number: "Please enter digits only",
                    }
                },
                // errorPlacement: function(error, element) {
                //     error.appendTo(element.parent().parent().after());
                // },
                submitHandler: function(form) {
                    /* Submit form data using ajax*/
                    $.ajax({
                        url: "{{url('signup')}}",
                        method: 'post',
                        data: $(form).serialize(),
                        success: function(response){
                            if (response.status == 'true') {
                                $('#otp_mod').show();
                                $('#created_usr').val(response.userId)
                                document.getElementById("signup-form").reset(); 
                            }
                        },error: function (errorMessage) { // error callback 
                            console.log('Error: ' + errorMessage);
                        }
                    });
                }
            })
            
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.otp_fields input').keyup(function(){
                var currleng = $(this).val().length;
                var maxleng = $(this).attr("maxlength");
                if(currleng == maxleng){
                    $(this).next().focus();
                }
            });
            $('.otp_fields input').keydown(function(e) {
                if ((e.which == 8 || e.which == 46) && $(this).val() =='') {
                    $(this).prev('input').focus();
                }
            });
        });
    </script>
@stop