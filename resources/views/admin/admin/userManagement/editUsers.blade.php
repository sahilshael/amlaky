@section('title','Munmtalikati/EDIT_USER')
@extends('admin.layout.dashboardLayout')
@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="page-header card">
                        <div class="card-block">
                            <h3 class="m-b-10">Edit User</h3>           
                                         
                        </div>                       
                    </div>
                    <form action="#" id="edit-user-form" class="form-horizontal" method="POST" enctype="multipart/form-data" >
                        <div class="card">
                            <div class="card-block">
                                <div class="form-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Type</label>
                                        <div class="col-sm-10">
                                            <select  name="user_type" placeholder="Select User Type"  class="form-control selectpicker">
                                                <option value="" >Select User Type</option>
                                                <option value="landlord" <?php if(isset($user->user_type)) {  if($user->user_type == 'landlord') { echo "selected";  }  } ?> >LandLord</option>
                                                <option value="service_provider" <?php if(isset($user->user_type)) {  if($user->user_type == 'service_provider') { echo "selected";  }  } ?> >Service Provider</option>
                                                <option value="teanant" <?php if(isset($user->user_type)) {  if($user->user_type == 'teanant') { echo "selected";  }  } ?> >Teanant</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="first_name" class="form-control"  placeholder="First Name" value="<?php echo isset($user->first_name)? $user->first_name: ''; ?>" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="last_name" class="form-control"  placeholder="Last Name" value="<?php echo isset($user->last_name)? $user->last_name: ''; ?>" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Email Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control myclass"  name="email" readonly placeholder=" Email Address" value="<?php echo isset($user->email)? $user->email: ''; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control myclass"  name="contact" placeholder=" Mobile Number" value="<?php echo isset($user->contact)? $user->contact: ''; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Company Name (Optional)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control myclass"  name="company" placeholder=" Company Name" value="<?php echo isset($user->company)? $user->company: ''; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Number of Property Managed</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control myclass"  name="properties_managed" placeholder=" Number of Property Managed" value="<?php echo isset($user->properties_managed)? $user->properties_managed: ''; ?>">
                                        </div>
                                    </div>

                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="status" name="status" class="form-control selectpicker">
                                                <option value="" >Select Status</option>
                                                <option value="active" <?php if(isset($user->status)) {  if($user->status == 'active') { echo "selected";  }  } ?>>Active</option>
                                                <option value="inactive" <?php if(isset($user->status)) {  if($user->status == 'inactive') { echo "selected"; }  } ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-sm-12 button center">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="{{url('admin/users')}}">
                                                <button type="button" class="btn green">Cancel</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>                
                    </form>
                </div> 
            </div>
        </div>
            
    </div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        // body...
        $('#edit-user-form').validate({
            rules:{
                first_name:{
                    required:true,
                    maxlength: 50,
                },
                last_name:{
                    required:true,
                    maxlength: 50,
                },
                user_type:{
                    required:true,
                },
                status:{
                    required:true,
                },
                contact:{
                    required:true,
                    maxlength: 12,
                    minlength: 8,
                    digits:true,
                    remote: {
                        url:"{{ url('admin/check-user-edit-contact') }}"+"/"+{{$user->id}},
                    },
                },
                properties_managed:{
                    required:true,
                    digits:true,
                },
            },
            messages:{

                first_name:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                },
                last_name:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                },
                user_type:{
                    required:"This field is required",
                },
                status:{
                    required:"This field is required",
                },
                contact:{
                    required:"This field is required",
                    maxlength:"maximum length should be 12",
                    minlength:"minimum length should be 8",
                    digits:'This field required only number',
                    remote: "Mobile number already exist",
                },
                properties_managed:{
                    required:"This field is required",
                    digits:'This field required only number',
                },
            },
        });
    });
</script>

@stop
