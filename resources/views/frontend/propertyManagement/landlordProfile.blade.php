@extends('frontend.layout.landlordLayout')
@section('title','Landlord Profile')
@section('content')
    <section class="sec_dashboard db_main">
        <div class="container-fluid">
            <div class="row">
                <div class="wrap_dash_sec view_prof_page view_usr"> <!-- change class -->
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
                                    <h4>My Profile</h4>
                                </div>
                                <div class="main_cntnt_dash">
                                    <div class="card_shd cnt_skamper">
                                        <div class="text-right log_btn">
                                            <a href="javascript:;" class="btn btn-primary">Edit Profile</a>
                                        </div>
                                        <!--  -->
                                        <div class="cont_shd_frm">
                                            <div class="row">
                                                <div class="col-sm-10 offset-1">
                                                    <form class="" method="" action="" id="">
                                                        <div class="text-center img_user">
                                                            <div class="pos_rel pic_top">
                                                                <img src="{{asset('public/frontend/img/profile2.jpg')}}" class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <!-- <input type="text" class="form-control" value="James"> -->
                                                                    <input type="text" class="form-control" value="{{$user->first_name}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" class="form-control" value="{{$user->last_name}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mobile Number</label>
                                                            <input type="text" class="form-control dtpckr" value="{{$user->contact}}" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="email" class="form-control" value="{{$user->email}}">
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label>Active Subscription Pack</label>
                                                            <input type="email" class="form-control" value="pack 1">
                                                        </div> -->
                                                        <!-- <div class="form-group">
                                                            <div class="text-right log_btn">
                                                                <a href="" class="btn btn_gradient btn_active">Change Password</a>
                                                            </div>
                                                        </div> -->
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
@stop
@section('scripts')
    
@stop