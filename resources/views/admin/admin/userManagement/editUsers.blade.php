@section('title','UNILIFE/EDIT_USER')
@extends('layout.dashboard_layout')
@section('content')
<style type="text/css">
    .btn.green {
        background: #72c8d8;
        color: #fff;
        margin: 10px 10px;
    }
    .form-group .col-sm-10 .form-control.select_member{
        width: 100% !important;
    }
    .button.center{
        text-align: center;
    }
</style>
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
                    <form action="#" id="edit_user_form" class="form-horizontal" method="POST" enctype="multipart/form-data" >
                        <div class="card">
                            <div class="card-block">
                                <div class="form-body">
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" disabled placeholder="User Name" value="<?php echo isset($user['username'])? $user['username']: ''; ?>" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">University/School</label>
                                        <div class="col-sm-10">
                                            <select  name="name" placeholder="Select University/School" id="university" class="form-control selectpicker">
                                               <?php foreach($data as $key=>$data1) { ?>
                                                    <option value="{{$data1->id}}" <?php if(isset($user['university_school_id'])) {  if($user['university_school_id'] == $data1->id) { echo "selected";  }  } ?> >{{$data1->name}}</option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">University/School Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control myclass" disabled name="university_school_email" placeholder="University/School Email Address" value="<?php echo isset($user['university_school_email'])? $user['university_school_email']: ''; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 col-form-label">Select Group</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select_member" multiple  name="group_id[]" placeholder="Select Group" id="group_tag">
                                                
                                                <?php foreach($group as $key=>$group1) { ?>
                                                    
                                                        <option value="{{$group1->id}}" <?php if(in_array($group1->id, $tag_group_user_id)){ echo 'selected'; } ?> >{{$group1->group_name}}</option>
                                                    
                                                <?php }?>
                                               
                                            </select>
                                        </div>
                                    </div>

                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="status" name="status" class="form-control selectpicker">
                                                
                                                <option value="active" <?php if(isset($user['status'])) {  if($user['status'] == 'active') { echo "selected";  }  } ?>>Active</option>
                                                <option value="inactive" <?php if(isset($user['status'])) {  if($user['status'] == 'inactive') { echo "selected"; }  } ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-sm-12 button center">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="{{url('/users')}}">
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

<link rel="stylesheet" type="text/css" href="{{url('public/css/multiple-select.css')}}">
<script type="text/javascript " src="{{url('public/js/assets/js/multiple-select.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
  
   $('#group_tag').multipleSelect();
    $('#university').change(function(){

        var cate = $(this).val();  
        if(cate){
            $.ajax({
                type:"GET",
                url:"{{url('/get-group-list')}}?university_id="+cate,
                success:function(res){               
                    if(res){
                         console.log(res);
                        $("#group_tag").empty();
                        $.each(res,function(key,value){
                            
                            $("#group_tag").append('<option value="'+value.id+'">'+value.group_name+'</option>');
                            
                        });

                        $('#group_tag').multipleSelect();
                   
                    }else{
                       $("#group_tag").empty();
                    }
                }
            });
        }else{
            $("#group_tag").empty();
        }      
   });
</script>

@stop
