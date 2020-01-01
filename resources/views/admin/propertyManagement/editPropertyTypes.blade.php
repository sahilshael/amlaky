@section('title','Mumtalikati/Property Types')
@extends('admin.layout.dashboardLayout')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="page-header card">
                        <div class="card-block">
                            <h3 class="m-b-10">Edit Property Type</h3>            
                        </div>                       
                    </div>
                                    
                    <form action="#" id="edit_type_form" class="" method="POST" enctype="multipart/form-data" >
                        <div class="card">
                            <div class="card-block">  
                                @csrf              
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-form-label">Property Type</label>
                                        <input type="text" name="property_type" class="form-control" placeholder="Enter Property Type" value="{{@$details->property_type}}">
                                    </div>
                                </div>
                                                                 
                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-sm-12 button center">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="{{url('admin/property-types')}}">
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
        $('#edit_type_form').validate({
 
       // Specify the validation rules
            rules: {
  
                property_type:{
                    required:true,
                    maxlength: 50,
                    remote: {
                        url:"{{ url('admin/check-edit-property-type') }}"+"/"+{{$details->id}},
                    },
                },
                                                   
            },
            messages: {
                property_type:{
                    required:"This field is required",
                    maxlength:"maxlength 50",
                    remote: "Property type already exist",
                },      
            },       
        });
    });
</script>
@stop
