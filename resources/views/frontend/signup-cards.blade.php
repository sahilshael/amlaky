@extends('frontend.layout.signupLayout')
@section('title','Signup Types')
@section('content')
	<section class="wrap_innr_amlaky signup_cards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="inner_card pos_rel">
                        <div class="card_img">
                            <img src="{{asset('public/frontend/img/ten.jpg')}}" class="img-fluid">
                        </div>
                        <div class="text_content">
                            <div class="card_inner_head text-left">
                                <h3>registration for property listing</h3>
                            </div>
                            <div class="btn1 text-left">
                                <a href="javascript:void(0);" class="btn btn-primary">View Detail</a>
                                <a href="{{url('/signup')}}" class="btn btn-primary">Select Plan</a>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="inner_card pos_rel">
                        <div class="card_img">
                            <img src="{{asset('public/frontend/img/Landlord.jpeg')}}" class="img-fluid">
                        </div>
                        <div class="text_content">
                            <div class="card_inner_head text-left">
                                <h3>registration for services listing</h3>
                            </div>
                            <div class="btn1 text-left">
                                <a href="javascript:void(0);" class="btn btn-primary">View Detail</a>
                                <a href="{{url('/signup')}}" class="btn btn-primary">Select Plan</a>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="inner_card pos_rel">
                        <div class="card_img">
                            <img src="{{asset('public/frontend/img/buysell.jpg')}}" class="img-fluid">
                        </div>
                        <div class="text_content">
                            <div class="card_inner_head text-left">
                                <h3>registration for PMS(Property management system)</h3>
                            </div>
                            <div class="btn1 text-left">
                                <a href="javascript:void(0);" class="btn btn-primary">View Detail</a>
                                <a href="{{url('/signup?type=landlord')}}" class="btn btn-primary">Select Plan</a>
                            </div>
                        </div>
                    </div>                        
                </div>       
            </div>                        
        </div>
    </section>
@stop