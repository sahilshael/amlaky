@section('title','DASHBOARD')
@extends('admin.layout.dashboardLayout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- <link href="{{asset('public/admin/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet"> -->

@section('content')

<style type="text/css">
    .profile_form .profile_formgroup label{
        font-size: small;
    }
    #edit_profile{
        padding: 10px;
    }
    .error{
        padding-left: 20px;
    }
</style>
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <!-- <div class="row"> -->
            <!-- <div class="page-wrapper"> -->
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-12">
                    <h3 class="text-primary">Profile</h3>
                </div>
                <!-- <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                    </div> -->
            </div>
            <!-- End Bread crumb -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        @endforeach
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <!-- <div class="avatar"> -->
                                        <!--   @if(!empty(Auth::guard('admins')->user()->image))
                                            <img class="img-responsive radius profile_image2" src="{{asset('public/admin/profileImages/'.Auth::guard('admins')->user()->image)}}" id="profile_image">
                                            @else
                                            <img class="img-responsive radius profile_image2" src="{{asset('public/admin/profileImages/defaultuser.png')}}" id="profile_image">
                                            
                                            @endif
                                            </div> -->
                                        <div class="row">
                                            <!-- <div class="col-lg-4 col-md-4 m-b-20 ">
                                            </div> -->
                                            <div class="col-lg-3 offset-lg-4 col-md-6 m-b-20 ">
                                                <div class="prof_dp">
                                                    @if(!empty(Auth::guard('admins')->user()->image))
                                                    <img class="img-fluid radius profile_image2" src="{{asset('public/admin/profile_img/'.Auth::guard('admins')->user()->image)}}" id="profile_image">
                                                    @else
                                                    <img class="img-fluid radius profile_image2" src="{{asset('public/frontend/img/profile2.jpg')}}" id="profile_image">
                                                    @endif                                                    
                                                </div>   
                                            </div>
                                        </div>
                                    </header>
                                    <div class="row">
                                        <!-- <div class="col-lg-4 col-md-4 m-b-20">
                                        </div> -->
                                        <div class="col-lg-3 offset-lg-4 col-md-6 m-b-20">
                                            <h3 style="text-align: center; color: #b94044; margin: 13px 0 0;">{{Auth::guard('admins')->user()->username}}</h3>
                                            <div class="desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="active"><a class="nav-link" data-toggle="tab" href="#home" role="tab">Account Settings</a></li>
                              <li><a class="nav-link" data-toggle="tab" href="#profile" role="tab">Change Profile Picture</a></li>
                              <li><a class="nav-link" data-toggle="tab" href="#settings" role="tab">Change Password</a></li>
                            </ul>
                            <!-- <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Account Settings</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Change Profile Picture</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Change Password</a> </li>
                            </ul> -->
                            <!-- <ul class="nav nav-tabs">
                                <li class="active" >
                                    <a href="#home" data-toggle="tab" class="color_change" >Personal Info</a>
                                </li>
                                <li class="">
                                    <a href="#profile" data-toggle="tab" class="color_change" >Change Avatar</a>
                                </li>
                                <li class="">
                                    <a href="#settings" data-toggle="tab" class="color_change" >Change Password</a>
                                </li>
                            </ul> -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material profile_form" id="edit_profile" action="{{url('admin/profile')}}" method="post">
                                            @csrf
                                            <div class="form-group profile_formgroup">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Name" value="@if(!empty(Auth::guard('admins')->user()->username)){{Auth::guard('admins')->user()->username}}@endif" name="username" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup" >
                                                <label class="col-md-12">First Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="First Name" value="@if(!empty(Auth::guard('admins')->user()->first_name)){{Auth::guard('admins')->user()->first_name}}@endif" name="first_name" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup" >
                                                <label class="col-md-12">Last Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Last Name" value="@if(!empty(Auth::guard('admins')->user()->last_name)){{Auth::guard('admins')->user()->last_name}}@endif" name="last_name" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="Zebra Theme@gmail.com" class="form-control form-control-line" name="example-email" value="@if(!empty(Auth::guard('admins')->user()->email)){{Auth::guard('admins')->user()->email}}@endif" id="example-email" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Phone Number" value="@if(!empty(Auth::guard('admins')->user()->phone_no)){{Auth::guard('admins')->user()->phone_no}}@endif" name="phone_no" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success back-btn">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="profile" class="tab-pane fade" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" id="edit_profile_image" action="{{url('admin/profile')}}"  method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row" >
                                                <div class="col-lg-3 col-md-6 m-b-20 ">
                                                    @if(!empty(Auth::guard('admins')->user()->image))
                                                    <img class="img-responsive radius profile_image2" src="{{asset('public/admin/profile_img/'.Auth::guard('admins')->user()->image)}}" id="profile_image">
                                                    @else
                                                    <img class="img-responsive radius profile_image2" src="{{asset('public/frontend/img/profile2.jpg')}}" id="profile_image">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 m-b-20 ">
                                                    <div class=" mb30 file-upload">
                                                        <span class="btn btn-default btn-file text-center">
                                                        <input type="file" id="imgInp" class="profile_image" name="image" accept="image/*"></span>                                   
                                                    </div>
                                                    <label class="error_size" style="color:red;font-size:10px;"></label>    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 m-b-20">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success back-btn upload_image">Update Image</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="settings" class="tab-pane fade" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material profile_form" id="change_password" action="{{url('admin/profile')}}" method="post">
                                            @csrf
                                            <div class="form-group profile_formgroup" >
                                                <label class="col-md-12">Current Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="password" id="password" class="form-control form-control-line" placeholder="Current password">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <label for="example-email" class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" class="form-control form-control-line" id="new_password" name="new_password" placeholder="New password">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <label class="col-md-12">Confirm Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="retype_password" id="retype_password" class="form-control form-control-line" placeholder="Re-enter new password">
                                                </div>
                                            </div>
                                            <div class="form-group profile_formgroup">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success back-btn">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- </div> -->
            <!-- </div> -->
        </div>
        <div id="styleSelector">
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- <script src="{{asset('public/admin/js/additional-methods.min.js')}}"></script> -->

<script type="text/javascript">
    jQuery.validator.addMethod("nameonly", function(value, element) {
           return this.optional(element) || /^[a-z/ ]+$/i.test(value);
       }, "Letters only please");

    $("#edit_profile").validate({    
        error:'label',
        rules:{
            username:{
                required:true
            },
            first_name:{
                required:true,
                nameonly:true
            },
            last_name:{
                required:true,
                nameonly:true
            },
            phone_no:{
                required:true,
                number:true,
                maxlength: 10,
                minlength: 10,
            }

             
        },
        messages:{
            username:{
                required:"This field is required."
            },
            first_name:{
                required:"This field is required."
            },
            last_name:{
                required:"This field is required."
            },
            phone_no:{
                required:"This field is required.",
                number:"please enter only number",
                maxlength:"maximum length atmost 10",
                minlength:"minimum length atleast 10",
            }
        },
        errorPlacement: function(error, element){
             error.insertAfter(element.parent());
    
        }
     });
</script>
<script type="text/javascript">
    // alert('hello');
    $("#edit_profile_image").validate({    
        error:'label',
        rules:{
    
            "profile_image":{
                required :true,
                extension: "jpg|png|jpeg"
            },
        },
        messages:{
            "profile_image":{
                extension:"Extension must be .jpg,.png,.jpeg only."
            },
        },
        errorPlacement: function(error, element){
            error.insertAfter(element.parent());
    
        }
    });
</script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('.profile_image2').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
<script type="text/javascript">
    $("#change_password").validate({    
         error:'label',
         rules:{
             "new_password":{
                 required:true,
                 minlength:6
             },
             "retype_password":{
               required:true,
                 minlength:6,
                 equalTo: "#new_password"
             },
    
             "password":{
                 required:true,
                 minlength:6,
                 remote: "{{url('admin/check-current-password')}}",
             },
         },
         messages:{
             "new_password":{
                 required: 'Please enter new password',
                 minlength:"Password Should not be smaller then 6 in length."
             },
    
             "password":{
                 required: 'Please enter current password',
                 minlength:"Password Should not be smaller then 6 in length.",
                 remote: "Please Fill the correct Current Password."
             },
    
             "retype_password":{
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
<script>
    $(document).on('change','.profile_image',function(){
         files = this.files;
         size = files[0].size / 1024 / 1024;
         //max size 50kb => 50*1000
         if( size > 2){
            $(".error_size").text('Please upload less than 2MB file');
            $(".upload_image").attr('disabled',true);
            return false;
         }else{
           $(".error_size").text('');
           $(".upload_image").attr('disabled',false);
    
         }
    
         return true;
    });
</script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript">
    
    $('.nav-link').click()
</script> -->
@stop
