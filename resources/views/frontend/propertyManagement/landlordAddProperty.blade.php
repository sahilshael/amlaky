@extends('frontend.layout.landlordLayout')
@section('title','Landlord Profile')
@section('content')
    <div class="home_page_wrapper add_property add_prop_inrp post_new_list">
        <section class="sec_dashboard db_main">
            <div class="container-fluid">
                <div class="wrap_dash_sec edit_prof_page"> <!-- change class -->
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
                                <div class="sec_heading text-left">
                                    <h2>Add Property</h2>
                                </div>
                                <div class="main_cntnt_dash t_agrmt">
                                    <div class="adv_open advc_tsub">
                                        
                                        <ul class="nav nav-tabs nav-justified pro-10" role="tablist">
                                            <li class="nav-item">
                                                <a href="#info" data-toggle="tab" class="nav-link change_step current float-left">
                                                    <span class="txtstep1 circleStepText float-left textHighlighted">Basic Info / Images</span>                            
                                                    <span class="circleSteps">1</span>
                                                </a>
                                                <span class="spaceDots float-left">.....................</span>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#floorplan" data-toggle="tab" class="nav-link change_step float-left">
                                                <span class="txtstep2 circleStepText float-left">Floorplans</span>
                                                <span class="circleSteps">2</span>
                                                </a>
                                                <span class="spaceDots float-left">.....................</span>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#document" data-toggle="tab" class="nav-link change_step float-left">
                                                <span class="txtstep3 circleStepText float-left">Documents</span>
                                                <span class="circleSteps">3</span>
                                                </a>
                                                <span class="spaceDots float-left">.....................</span>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#videos" data-toggle="tab" class="nav-link change_step float-left">
                                                <span class="txtstep4 circleStepText float-left">Videos</span>
                                                <span class="circleSteps">4</span>
                                                </a>
                                                <span class="spaceDots float-left">.....................</span>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#status" data-toggle="tab" class="nav-link change_step float-left">
                                                <span class="txtstep5 circleStepText float-left">Status</span>
                                                <span class="circleSteps">5</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="info" class="container tab-pane active">
                                              @include('frontend.propertyManagement.include.addPropBasicInfo')
                                            </div>
                                            <div id="floorplan" class="container tab-pane fade">
                                                @include('frontend.propertyManagement.include.floorPlans')
                                            </div>
                                            <div id="document" class="container tab-pane fade">
                                                @include('frontend.propertyManagement.include.documents')
                                            </div>
                                            <div id="videos" class="container tab-pane fade">
                                                @include('frontend.propertyManagement.include.videos')
                                            </div>
                                            <div id="status" class="container tab-pane fade">
                                                @include('frontend.propertyManagement.include.status')
                                            </div>
                                        </div>                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('frontend.include.footer')
</div>

 <!-- Property features Modal start -->
            <div class="container">
                <div class="modal fade features_minfo post_new_list" id="tenatadv">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">property features</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>            
                            <div class="modal-body">
                                <div class="feat_content">
                                    <div class="row">
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>main features</h4>
                                                </div>
                                                <form class="">
                                                    <div class="form-group">
                                                        <label>Built in Years</label>
                                                        <input type="text" name="build">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>View</label>
                                                        <input type="text" name="view">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Parking Space</label>
                                                        <input type="text" name="ps">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Double Glazed Windows</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Central Air Conditioning</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Central Heating</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Flooring</label>
                                                        <select>
                                                            <option>Select</option>
                                                            <option>Tiles</option>
                                                            <option>Marbles</option>
                                                            <option>Wooden</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>Rooms</h4>
                                                </div>
                                                <form class="">
                                                    <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <input type="text" name="build">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bathrooms</label>
                                                        <input type="text" name="view">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Parking Space</label>
                                                        <input type="text" name="ps">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Drawing Rooms</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dining Rooms</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Store Rooms</label>
                                                        <input type="text" name="view">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Laundry Rooms</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>                                                    
                                                    <!-- <div class="form-group">
                                                        <label>Flooring</label>
                                                        <select>
                                                            <option>Select</option>
                                                            <option>Tiles</option>
                                                            <option>Marbles</option>
                                                            <option>Wooden</option>
                                                        </select>
                                                    </div> -->
                                                </form>
                                            </div>                                            
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>Business and Communication</h4>
                                                </div>
                                                <form class="">
                                                    <!-- <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <input type="text" name="build">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bathrooms</label>
                                                        <input type="text" name="view">
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label>Broadband Internet Activity</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Satellite or Cable TV Ready</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Intercom</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Other Business and Communication Facilities</label>
                                                        <input type="text" name="ps">
                                                    </div>                                                                                                      
                                                    <!-- <div class="form-group">
                                                        <label>Flooring</label>
                                                        <select>
                                                            <option>Select</option>
                                                            <option>Tiles</option>
                                                            <option>Marbles</option>
                                                            <option>Wooden</option>
                                                        </select>
                                                    </div> -->
                                                </form>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>Healthcare Recreational</h4>
                                                </div>
                                                <form class="">
                                                    <!-- <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <input type="text" name="build">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bathrooms</label>
                                                        <input type="text" name="view">
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label>Lawn or Garden</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Swimming Pool</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sauna</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Other Healthcare and Recreation Facilities</label>
                                                        <input type="text" name="ps">
                                                    </div>                                                                                                      
                                                    <!-- <div class="form-group">
                                                        <label>Flooring</label>
                                                        <select>
                                                            <option>Select</option>
                                                            <option>Tiles</option>
                                                            <option>Marbles</option>
                                                            <option>Wooden</option>
                                                        </select>
                                                    </div> -->
                                                </form>
                                            </div>                                            
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>Nearby Locations and Other Facilities Nearby Schools</h4>
                                                </div>
                                                <form class="">
                                                    <div class="form-group">
                                                        <label>Nearby Schools</label>
                                                        <input type="text" name="build">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nearby Hospitals</label>
                                                        <input type="text" name="view">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nearby Shopping Malls</label>
                                                        <input type="text" name="view">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Other Nearby Places</label>
                                                        <input type="text" name="view">
                                                    </div>                                                    
                                                </form>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg col-md-6">
                                            <div class="main-feat">
                                                <div class="pern-info text-left">
                                                    <h4>Other Facilities</h4>
                                                </div>
                                                <form class="">
                                                    <div class="form-group">
                                                        <label>Maintenance Staff</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Security Staff</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facilities for Disabled</label>
                                                        <input type="checkbox" class="form-check-input" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Other Facilities</label>
                                                        <input type="text" name="ps">
                                                    </div>
                                                </form>
                                            </div>                                            
                                        </div>    
                                    </div>
                                </div>                                
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="side_btn text-center">
                                            <a href="javascript:;" class="btn btn-primary" data-dismiss="modal">save & continue</a>
                                        </div>                
                                    </div>                        
                                </div>                    
                            </div>                
                        </div>           
                    </div>
                </div>
            </div>
        <!-- Modal End --> 
@stop
@section('scripts')
    <script>
        $(".my_dropdown").hide();
        $(document).ready(function(){
           $(".post_home").click(function(){
            $(".my_dropdown_plot").hide();
            $(".my_dropdown_comm").hide();
            $(".my_dropdown_hotel").hide();
            // $(".my_dropdown_aptmenthotel").hide();
            $('.hotel_part').hide();
            $('.add_rental_prop').show();
            // $(".my_dropdown").slideToggle('normal');
           });
        });
    </script>
    <script>
        $(".my_dropdown_plot").hide();
        $(document).ready(function(){
           $(".post_plot").click(function(){
            $(".my_dropdown").hide();
            $(".my_dropdown_comm").hide();
            $(".my_dropdown_hotel").hide();
            // $(".my_dropdown_aptmenthotel").hide();
            $('.hotel_part').hide();
            $('.add_rental_prop').show();
            $(".my_dropdown_plot").slideToggle('normal');
           });
        });
    </script>
    <script>
        $(".my_dropdown_comm").hide();
        $(document).ready(function(){
           $(".post_comm").click(function(){
            $(".my_dropdown").hide();
            $(".my_dropdown_plot").hide();
            $(".my_dropdown_hotel").hide();
            // $(".my_dropdown_aptmenthotel").hide();
            $('.hotel_part').hide();
            $('.add_rental_prop').show();
            $(".my_dropdown_comm").slideToggle('normal');
           });
        });
    </script>
    <script>
        $(".my_dropdown_hotel").hide();
        $(document).ready(function(){
           $(".post_hotel").click(function(){
            $(".my_dropdown").hide();
            $(".my_dropdown_plot").hide();
            $(".my_dropdown_comm").hide();
            // $(".my_dropdown_aptmenthotel").hide();
            $(".my_dropdown_hotel").slideToggle('normal');
           });
        });
    </script>

    <!-- map script -->
    <script src="{{asset('public/frontend/js/common_map.js')}}"></script>
    <script>
         var default_map_position = {lat: 24.7257962, lng: 46.7889467};
    </script>
    <!-- End -->

    <!-- choose Hotel show div  -->
    <script>
      $('.hotel_part').hide();  
      $(document).ready(function(){
        $('.post_hotel').click(function(){
          $('.add_rental_prop').hide();
          $('.hotel_part').show();
        });
      });
    </script>
    <!-- Append div -->
    <script>
        $(document).ready(function(){
            $('.my_append').click(function(){
                $('.appnd_data').append('<div class="row app-cont"><div class="col-sm-10 my_column"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><form><div class="form-group"><label>Location</label><input type="text" name="location" class="form-control" placeholder="Enter Location"></div></form></div><div class="col-lg-6 col-md-6 col-sm-12"><form><div class="form-group"><label>Distance</label><input type="tel" name="distance" class="form-control" placeholder="Enter Distance"></div></form></div></div></div><div class="col-lg-2 col-md-12 col-sm-12"><div class="form-group text-center"><label style="opacity: 0">ddsgsgsg</label><span class="ht_add_prop"><i class="fas fa-minus-circle cro1ss"></i></span></div></div></div>');
            });
        });
    </script>
    <!-- End -->

    <!-- remove div -->
    <script>
        $(document).on("click", ".cro1ss", function(){
            // alert('yes');
            $(this).parents('.app-cont').remove();
        });
    </script>
    <!-- End -->


    <script>
         $(".my_dropdown").hide();
        $(document).on("change", ".property_type_val", function(){            
            if(this.checked) {
                var p_val = $(this).val();
                
                $.ajax({
                    url: "{{url('get-property-subTypes')}}",
                    type: "POST",
                    data: {propert_id : p_val},  
                    // cache: false,
                    success: function(data){
                        $("#subproperty_area").html(data);
                        $(".my_dropdown").slideDown();
                    }
                });
            }
        });
    </script> 
    
@stop
        
 
