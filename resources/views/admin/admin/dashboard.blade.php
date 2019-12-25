@section('title','MUMTALIKATI/DASHBOARD')
@extends('admin.layout.dashboardLayout')
@section('content')
<style type="text/css">
    .card-block.li_summry .li_summry li{
        padding-top: 32px;
    }
</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <!-- social statustic start -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-block text-center ">
                                    <!-- <i class="fa fa-envelope-open text-c-blue d-block f-40"></i> -->
                                    <i class="fa fa-user text-c-blue d-block f-40" aria-hidden="true" ></i>
                                    <h4 class="m-t-20"><span class="text-c-blue">570</span> Landlords</h4>
                                    <!-- <p class="m-b-20">Your Users list is growing</p> -->
                                    <!-- <button class="btn btn-primary btn-sm btn-round">Manage List</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-block text-center">
                                    <i class="fa fa-tag text-c-green d-block f-40"></i>
                                    <h4 class="m-t-20"><span class="text-c-green">730</span> Service Providers</h4>
                                    <!-- <p class="m-b-20">Your Coupons list is growing</p> -->
                                    <!-- <button class="btn btn-success btn-sm btn-round">Check them out</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-block text-center">
                                    <i class="fa fa-file-text text-c-pink d-block f-40"></i>
                                    <h4 class="m-t-20"><span class="text-c-pink">580</span> Teanants</h4>
                                    <!-- <p class="m-b-20">Your Blogs list is growing</p> -->
                                    <!-- <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button> -->
                                </div>
                            </div>
                        </div>
                       
                        <!-- users visite and profile end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@stop


