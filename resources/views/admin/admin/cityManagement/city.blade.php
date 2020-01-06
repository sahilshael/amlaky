@section('title','Mumtalikati/City')
@extends('admin.layout.dashboardLayout')
@section('content')
<style type="text/css">
    .dataTables_wrapper{
        width: 100%;
    }
    /*.btn.green{
        background: #72c8d8;
        color: #fff;
        margin:10px 10px;
    }*/

    #unilife_myModal .modal-header{
        display: unset;
        background: #72c8d8;
        color: #fff;
    }

       #unilife_myModal .modal-header .close{
        opacity: 1;
        color: #000;
    }

      #unilife_myModal .modal-header .modal-title{
      font-weight: bolder;
    }

     #unilife_myModal .daterange_model{
        padding: 13px;
        text-align: center;
        margin-left: 130px;
        border: none;
        background: #f3eeee;
     }
     #unilife_myModal .modal-body{
        padding: 0;
    }

    /*close_btn_unifie*/

    #unilife_myModal .export_btn_unifie.focus, .export_btn_unifie:focus, .export_btn_unifie:hover {
    color: #333;
    text-decoration: none;
    background: #e6e6e6;
    }

</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="portlet-title">
                                <div class="caption">
                                    <h3> City </h3>
                                </div>
                            </div>
                            <div class="row user_excel_btn">
                                                         
                                <a class="btn green" href="{{url('admin/add-city')}}"> <i class="fa fa-plus"></i> Add City </a>
                            </div>
                            
                            <div class="row" >
                                <table class="table table-hover table-striped" id="citytable" style="width: 100%!important">
                                    <thead>
                                        <th></th>
                                        <th>Id</th>
                                        <th>City Name</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-btn">
                                <!-- <form method="post" id="select-delete" >
                                    @csrf
                                    <input class="checker" type="hidden" name="someCheckbox[]" value="">
                                    <div class="btn-group pull-right m-b-10">
                                        <button id="selectDelete" type="button" class="btn green">
                                        Mark as delete 
                                        </button>
                                    </div>
                                </form> -->
                                <!-- <form method="post" id="select-active">
                                    @csrf
                                    <input class="checker" type="hidden" name="someCheckbox[]" value="">
                                    <div class="btn-group pull-right m-b-10">
                                        <button id="selectActive" type="button" class="btn green selectall_btn">
                                        Selected Status Active 
                                        </button>
                                    </div>
                                </form>
                                <form method="post" id="select-inactive">
                                    @csrf
                                    <input class="checker" type="hidden" name="someCheckbox[]" value="">
                                    <div class="btn-group pull-right m-b-10">
                                        <button id="selectInactive" type="button" class="btn green selectall_btn">
                                        Selected Status Inactive 
                                        </button>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            <div id="styleSelector">
        </div>
    </div>
</div>


<script type="text/javascript">
    var value=[];
    $(document).on('click','.child_all',function(){
        if ($(this).is(':checked')) {
            $(this).prop( 'checked', true );       
            value.push($(this).val());
            $('.checker').val(value);
        }
        if ($(this).is(':not(:checked)')) { 
            $(this).prop( 'checked', false );
            var index = value.indexOf($(this).val());
            if (index > '-1') {
                value.splice(index, '1');
            }  
            $('.checker').val(value);                 
        }
    });
</script>
<script>
    $(function() {
        var t =  $('#citytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{url("admin/ajax-city")}}',
            scrollX:        true,
            columns: [

                {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false}, 
    
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },  
       
                { data: 'city_name', name: 'city_name' },

                { data: 'action', name: 'action', orderable: false, searchable: false },  
            ], 
             
            // order: [[ 1, 'asc' ]] 
        });            
    
    });
</script>
<!-- <script type="text/javascript">
    $('#selectDelete').click(function(){
        $.ajax({
            url:"{{url('/admin/property-types-delete')}}",
            method:'post',
            data:$('#select-delete').serialize(),
            success: function(response){
                if (response.status == 'true') {
                    console.log('succes: ' + response);
                    location.replace("{{url('admin/property-types')}}");
                }
            },error:function(errorMessage){
                console.log('Error: ' + errorMessage);
                location.replace("{{url('admin/property-types')}}");
            }

        });
    });
</script>
<script type="text/javascript">
    $('#selectInactive').click(function(){
        $.ajax({
            url:"{{url('/admin/property-types-inactive')}}",
            method:'post',
            data:$('#select-inactive').serialize(),
            success: function(response){
                if (response.status == 'true') {
                    console.log('succes: ' + response);
                    location.replace("{{url('admin/property-types')}}");
                }
            },error:function(errorMessage){
                console.log('Error: ' + errorMessage);
                location.replace("{{url('admin/property-types')}}");
            }

        });
    });
</script>
<script type="text/javascript">
    $('#selectActive').click(function(){
        $.ajax({
            url:"{{url('/admin/property-types-active')}}",
            method:'post',
            data:$('#select-active').serialize(),
            success: function(response){
                if (response.status == 'true') {
                    console.log('succes: ' + response);
                    location.replace("{{url('admin/property-types')}}");

                }
            },error:function(errorMessage){
                console.log('Error: ' + errorMessage);
                location.replace("{{url('admin/property-types')}}");
            }

        });
    });
</script> -->
@stop


