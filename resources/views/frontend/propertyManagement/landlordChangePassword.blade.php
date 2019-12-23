@extends('frontend.layout.landlordLayout')
@section('title','Landlord Profile')
@section('content')
<div class="home_page_wrapper tent_tc pwd_change">
    <section class="sec_dashboard db_main">
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="wrap_dash_sec edit_prof_page"> <!-- change class -->
                    <div class="row"> 
                        <div class="col-sm-3">
                            <div class="sidebar_wrap card_shd">
                                <!--  -->
                                @include('frontend.include.landlordSidebar')
                                <!--  -->
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="mainside_wrap">
                                <!--  -->
                                <div class="page_head">
                                    <div class="arrow_icon">
                                        <a href="{{url('/landlord-editprofile')}}">
                                            <i class="fa fa-arrow-left"></i>
                                        </a>                                                    
                                    </div>
                                    <div class="term_head">
                                        <h4>Change Password</h4>
                                    </div>
                                </div>
                                <div class="main_cntnt_dash t_agrmt">
                                    <div class="card_shd cnt_skamper">                                                 
                                        <!--  -->
                                        <div class="cont_shd_frm">
                                            <div class="row">
                                                <div class="col-sm-10 offset-1">
                                                    <form class="" method="POST" action="{{url('/landlord-change-password')}}" id="changepassword-form">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <input type="password" name="password" placeholder="Current Password" class="form-control" value="" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <input type="password" name="new_password" placeholder="New Password" id="new_password" class="form-control" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Confirm New Password</label>
                                                            <input type="password" name="retype_password" placeholder="Confirm New Password" class="form-control" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- <input type="hidden" name="test" id="test" value="0"> -->
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary">Update Password</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="modal fade" id="pwd_update">
            <div class="modal-dialog profile_mdal">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <div class="modal-img text-center">
                            <img src="./img/checkmark-2.gif" alt="gif-image">
                            <p>password change successfully</p>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.footer')
</div>

    <!-- Modal End -->
@stop
@section('scripts')
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        
        $('#changepassword-form').validate({
            error:'label',
            rules:{
                password:{
                    required:true,
                    minlength:6,
                    remote: "{{url('/landlord-check-password')}}",
                },
                new_password:{
                    required:true,
                    minlength:6
                },
                retype_password:{
                    required:true,
                    minlength:6,
                    equalTo: "#new_password"
                },
    
            },
            messages:{
                password:{
                    required: 'Please enter current password',
                    minlength:"Password Should not be smaller then 6 in length.",
                    remote: "Please Fill the correct Current Password."
                },
                new_password:{
                    required: 'Please enter new password',
                    minlength:"Password Should not be smaller then 6 in length."
                },
    
    
                retype_password:{
                    required: 'Please re-enter new password',
                    minlength:"Password Should not be smaller then 6 in length.",
                    equalTo : "New password and confirm password should be equal."
               
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    url: "{{url('landlord-change-password')}}",
                    method: 'post',
                    data: $(form).serialize(),
                    success: function(response){
                        if (response.status == 'true') {
                            $('#pwd_update').modal('show');
                            document.getElementById("changepassword-form").reset(); 
                        }
                    },error: function (errorMessage) { // error callback 
                        console.log('Error: ' + errorMessage);
                    }
                });
            }
        });
            
        })
    </script>
    

    
@stop