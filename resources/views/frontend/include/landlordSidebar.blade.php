<div class="pos_rel">
    <div class="menu_bar">
        <a href="javascript:;">
            <img src="{{asset('public/frontend/img/menu.png')}}" class="img-fluid">
        </a>
    </div>
    <div class="pic_top pos_rel text-center">
        <div class="pos_rel pic_pos">
            <?php $img =  $user->profile_image;?>
            @if(empty($img))
                <img src="{{asset('public/frontend/img/defaultuser.png')}}" class="img-fluid" alt="">
            @else
                <img src="{{asset('public/frontend/profile_img/'.$img)}}" class="img-fluid" alt="">
            @endif
        </div>
    </div>
    <div class="tenant_img_head pos_rel text-center">
        <h4 class="name_db">{{$user->first_name}} {{$user->last_name}}</h4>
        <h4 class="name_db text-capitalize">{{$user->user_type}}</h4>
    </div>
    <div class="tenant_head pos_rel text-center">
        <h4 class="tent_h">{{$user->user_type}}</h4>   
    </div>
    <div class="side_menu">
        <ul type="none" class="ul_side">
            <!-- <li class="active"><a href="javascript:;"><span><i class="fas fa-user-tie"></i></span> Profile Management</a></li> -->
            <li class="active"><a href="{{url('landlord-dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard </span></a></li>
            <li><a href="javascript:;"><i class="fas fa-home"></i><span> Properties</span> </a></li>
            <li class="tenant_list">
                <a href="javascript:;"><i class="fas fa-users"></i><span> Tenants</span>
                    <i class="fas fa-angle-right arrowd"></i>
                </a>
                <ul type="none" class="tenants_sec">
                    <li><a href="javascript:;"><i class="fas fa-tasks"></i><span>Tenants Management</span></a></li>
                    <li><a href="javascript:;"><i class="fas fa-file-contract"></i><span>Tenancy Agreements</span></a></li>
                </ul>
            </li>
            <!-- <li><a href="javascript:;"><i class="fas fa-unlock"></i><span> Privileges</span></a></li> -->
            <li><a href="javascript:;"><i class="far fa-money-bill-alt"></i><span> Rent Collection </span></a></li>
            <li><a href="javascript:;"><i class="fas fa-university"></i><span> Bank Reconciliation</span> </a></li>
            <li><a href="javascript:;"><i class="fas fa-cogs"></i><span> Receivable Management</span> </a></li>
            <li><a href="javascript:;"><i class="fas fa-user-shield"></i><span> Recovery & Legal</span></a></li>
            <li><a href="javascript:;"><i class="fas fa-file"></i><span> Vacancy Management</span> </a></li>
            <li><a href="javascript:;"><i class="far fa-clipboard"></i><span> Maintenance/ Complaints</span> </a></li>
            <li><a href="javascript:;"><i class="fas fa-credit-card"></i><span> Expense Management</span></a></li>
            <li><a href="javascript:;"><i class="fab fa-pagelines"></i><span> Facility Management</span> </a></li>
            <li class="user_rlist">
                <a href="javascript:;"><i class="fas fa-hand-point-right"></i><span> User Rights</span>
                    <i class="fas fa-angle-right arrowd"></i>                    
                </a>
                <ul type="none" class="user_sec">
                    <li><a href="javascript:;"><i class="fas fa-users-cog"></i><span>Staff Management</span></a></li>
                    <li><a href="javascript:;"><i class="fas fa-unlock"></i><span>Privileges</span></a></li>
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fas fa-poll-h"></i><span> Reports</span> </a></li>        
            <li><a href="javascript:;"><i class="far fa-comments"></i><span> Messages</span> </a></li>
            <li><a href="javascript:;"><i class="fas fa-rss"></i><span> Feedback</span></a></li>
            <!-- <li><a href="javascript:;"><i class="fas fa-file-contract"></i><span> Tenancy Agreements</span> </a></li> -->
            <!-- <li><a href="javascript:;"><i class="fas fa-users-cog"></i><span> Staff Management</span></a></li> -->
            <!-- <li><a href="javascript:;"><i class="fas fa-cogs"></i> <span> Settings</span> </a></li> -->
            <!-- <li><a href="javascript:;"><i class="fas fa-user-tie"></i><span> Profile</span> </a></li> -->
            <!-- <li><a href="javascript:;"><i class="fas fa-mobile-alt"></i><span> Contact Us </span></a></li> -->
            <!-- <li><a href="javascript:;"><i class="fas fa-handshake"></i><span> Tenancy Agreements</span> </a></li> -->
            <!-- <li>
                <a href="#logout_mdal" data-toggle="modal">
                    <i class="fas fa-sign-out-alt"></i> <span> Logout</span>
                </a>
            </li> -->
        </ul>
    </div>
</div>
<!-- Logout Modal start -->

    <div class="container">
        <div class="modal fade" id="logout_mdal">
            <div class="modal-dialog log_mdal">
                <div class="modal-content">            
                    <div class="modal-body text-center">
                        <div class="modal-para text-center">
                           <p>Are you sure you want to logout?</p>                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="modal-btn">
                                    <a href="{{url('logout')}}" class="btn btn-danger">Yes</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mdal_btn">
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

