@section('title','UNILIFE/ADD_USER')
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
                            <h3 class="m-b-10">Add User</h3>            
                        </div>                       
                    </div>
                                    
                    <form action="#" id="add_user_form" class="form-horizontal" method="POST" enctype="multipart/form-data" >
                        <div class="card">
                            <div class="card-block">                
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" placeholder="User Name" >
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">University/School</label>
                                        <div class="col-sm-10">
                                            <select  name="name" id="university" placeholder="Select University/School" class="form-control selectpicker">
                                                <option value="">Select University</option>
                                               <?php foreach($data as $key=>$data1) { ?>
                                                    <option value="{{$data1->id}}">{{$data1->name}}</option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">University/School Email</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control myclass" id="email"  name="university_school" placeholder="University/School Email" >
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control myclass" disabled id="domain" name="university_school_domain" value="{{$domain->domain}}" >
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control myclass"  id="hidden" name="university_school_email"  >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 col-form-label">Select Group</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select_member" multiple  name="group_id[]" placeholder="Select Group" id="group_tag">

                                            </select>
                                        </div>
                                        
                                    </div>
                                    
                                       
                                     @csrf                               
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="status" name="status" class="form-control selectpicker">
                                                
                                                <option value="active" >Active</option>
                                                <option value="inactive" >Inactive</option>
                                            </select>
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" >
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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>  

<script type="text/javascript">
    
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please"); 

    $.validator.addMethod("customemail",function(value, element) {
        return /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test(value);
    },"Please enter valid email address");
 
    $(document).ready(function(){
        var abc= $('#domain').val();
        var encoded_abc = btoa(abc);

        $('#add_user_form').validate({
 
       // Specify the validation rules
            rules: {
  
                username:{
                    required:true,
                    maxlength: 50,
                    remote: {
                            url:"{{ url('/user_check_username') }}",
                            
                    } 
                },

                university_school:{
                    required:true,
                    maxlength: 50,
                    remote: {
                            url:"{{ url('/user_check_email') }}"+'/'+encoded_abc,
                            
                    } 
                },
                name:{
                    required:true,
               },
                password:{
                    required:true,
                    maxlength: 50,  
                    minlength:6
                },
                confirm_password:{
                    required:true,
                    maxlength: 50,  
                    minlength:6,
                    equalTo:'#password'
                },
                mobile_no:{
                    required:true,    
                    number:true,
                    maxlength:10,             
                    minlength:10,             
                },
                                                   
            },
            messages: {
                username:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                    remote: "username is already exist"
                },
                university_school:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                    remote: "Email is already exist"
                },
                
                name:{
                    required:"This field is required",
                },
                password:{
                    required:"This field is required",
                    maxlength:"maximum length is 50",  
                    minlength:"minimum length is 6"
                },
                confirm_password:{
                    required:"This field is required",
                    maxlength:"maximum length is 50",  
                    minlength:"minimum length is 6",
                    equalTo:'password and confirm password should be same.'
                },
                mobile_no:{
                    required:"This field is required", 
                    number:"Please enter valid number",
                    maxlength:"maxlength 10",             
                    minlength:"minlength 10",             
                },
                               
            },       
        });
    });
</script>
<script type="text/javascript">
   
    $('#university').change(function(){
        var cate = $(this).val();  
        console.log('this') 
        if(cate){
            $.ajax({
                type:"GET",
                url:"{{url('/get-domain-list')}}?university_id="+cate,
                success:function(res){               
                    if(res){
                         console.log(res);
                        $("#domain").empty();
                        $.each(res,function(key,value){
                            $("#domain").val(''+value.domain+'');
                        });
                   
                    }else{
                       $("#domain").empty();
                    }
                }
            });
        }else{
            $("#domain").empty();
        }      
   });
</script>
<script type="text/javascript">
   $('#email').change(function(){
        var $email= $('#email').val();
        var $domain= $('#domain').val();
         $("#hidden").val(''+$email+''+$domain+'');
   }); 

</script>

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
