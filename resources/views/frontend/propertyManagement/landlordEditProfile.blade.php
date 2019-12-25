@extends('frontend.layout.landlordLayout')
@section('title','Landlord Profile')
@section('content')
<div class="home_page_wrapper tent_db edit_prof_page_prof_db tent_tc">
    <section class="sec_dashboard db_main">
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="wrap_dash_sec edit_prof_page"> <!-- change class -->
                    <div class="row"> 
                        <div class="col-sm-3 cd" id="abcd">
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
                                        <a href="{{url('/landlord-profile')}}">
                                            <i class="fa fa-arrow-left"></i>
                                        </a>                                                    
                                    </div>
                                    <div class="term_head">
                                        <h4>Edit Profile</h4>
                                    </div>
                                </div>
                                <div class="main_cntnt_dash t_agrmt">
                                    <div class="card_shd cnt_skamper">
                                        <div class="text-right log_btn">
                                            <a href="{{url('/landlord-change-password')}}" class="btn btn-primary">Change Password</a>
                                        </div>
                                        <!--  -->
                                        <div class="cont_shd_frm">
                                            <div class="row">
                                                <div class="col-sm-10 offset-1">
                                                    <form class="" method="POST" action="{{url('/landlord-editprofile')}}" id="editprofile-form" enctype="multipart/form-data">
                                                        <div class="text-center img_user">
                                                            <div class="pos_rel pic_top">
                                                                <span class="img_edtt pos_rel">
                                                                    <?php $img =  $user->profile_image;?>
                                                                    @if(empty($img))
                                                                    <img src="{{asset('public/frontend/img/defaultuser.png')}}" class="img-fluid img-responsive" id="prof_ch">
                                                                    @else
                                                                    <img src="{{asset('public/frontend/profile_img/'.$img)}}" class="img-fluid img-responsive" id="prof_ch">
                                                                    @endif
                                                                    <span class="edt_inpt">
                                                                        <i class="far fa-edit"></i>
                                                                        <input type="file" name="image" class="file_img upload-pic">
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6 col-xs-12">
                                                                
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <!-- <input type="text" class="form-control" value="James"> -->
                                                                    <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mobile Number</label>
                                                            <input type="tel" class="form-control" name="contact" value="{{$user->contact}}" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="email" class="form-control" value="{{$user->email}}" disabled>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label>Select Subscription Pack</label>
                                                              <select class="niceselc form-control">
                                                                  <option>Select</option>
                                                                  <option>Pack 1</option>
                                                                  <option>Pack 2</option>
                                                                  <option>Pack 3</option>
                                                              </select>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <input type="hidden" name="test" id="test" value="0">
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary">Update Profile</button> 
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
        <div class="modal fade" id="editprofile">
            <div class="modal-dialog log_mdal">
                <div class="modal-content">            
                    <div class="modal-body text-center">
                        <div class="modal-para text-center">
                           <p>Are you sure to save?</p>                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="modal-btn">
                                    <a href="javascript:void(0);" class="btn btn-danger" id="modal-yes">Yes</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mdal_btn">
                                    <input type="hidden" name="test" id="test" value="0">
                                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal">No</a>                 
                                </div>                        
                            </div>                        
                        </div>                    
                    </div>                
                </div>           
            </div>
        </div>
    </div>

    <!-- Modal End -->
    @include('frontend.include.footer')
</div>
@stop
@section('scripts')
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        // $(document).ready(function(){


            $('#editprofile-form').validate({
                ignore:[],
                rules: {
                    first_name: {
                        required:true,
                    },
                    last_name: {
                        required:true,
                    },
                    image: {
                        required:true,
                    },
                    contact: {
                        required: true,
                        number: true,
                        // remote: {
                        //     url:"{{ url('/check_edit_contact') }}",
                        // },
                    },
                },
                messages: {
                    // first_name: 'This field is required',
                    // last_name: 'This field is required',
                    // image: 'This field is required',
                    contact: {
                        required: "Mobile number is required",
                        number: "Please enter digits only",
                    }, 
                },
                submitHandler: function(form) {
                    var test=$('#test').val();
                    if(test=='1'){
                        form.submit();
                    }else{

                        $('#editprofile').modal('show');
                    }
                }
            });
            
        // })
    </script>
    <script type="text/javascript">
        $('#modal-yes').click(function(){
            alert('submit');
            $('#test').val('1');
            $('#editprofile-form').submit();
        });
    </script>

    <script>
        $(document).ready(function() {    
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
            
                    reader.onload = function (e) {
                        $('.img-responsive').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $(".upload-pic").on('change', function(){
                //alert(readURL(this));
                readURL(this);
            });
            
            $(".edit-icon").on('click', function() {
               $(".upload-pic").click();
            });
        });
    </script>
@stop