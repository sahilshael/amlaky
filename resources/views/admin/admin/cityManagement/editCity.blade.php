@section('title','Mumtalikati/City')
@extends('admin.layout.dashboardLayout')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="page-header card">
                        <div class="card-block">
                            <h3 class="m-b-10">Edit City</h3>            
                        </div>                       
                    </div>
                                    
                    <form action="#" id="edit_city" class="" method="POST" enctype="multipart/form-data" >
                        <div class="card">
                            <div class="card-block">  
                                @csrf              
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-form-label">City Name</label>
                                        <input type="text" name="city_name" class="form-control" placeholder="Enter City Name" value="{{@$details->city_name}}">
                                    </div>
                                </div>
                                                                 
                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-sm-12 button center">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="{{url('admin/city')}}">
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
    $(document).ready(function(){
        $('#edit_city').validate({
 
       // Specify the validation rules
            rules: {
  
                city_name:{
                    required:true,
                    maxlength: 50,
                    remote: {
                        url:"{{ url('admin/check-edit-city') }}"+"/"+{{$details->id}},
                    },
                },
                                                   
            },
            messages: {
                city_name:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                    remote: "City already exist",
                },      
            },       
        });
    });
</script>
@stop
