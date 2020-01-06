<div class="prof-pern-info post_new_user float-left post_new_list">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <form class="" method="" action="" id="">
                <div class="pern-info text-left">
                    <h4>Property Type And Location</h4>
                </div>
                <div class="part1 aml_map">
                    <div class="form-group">
                        <label>Purpose</label>
                        <div class="purpose landlord_purpose">
                            <div class="form-check-inline">
                                <label class="form-check-label custom_label">
                                    <input type="radio" class="form-check-input" name="optradio" checked>Rent
                                    <span class="checkmark radio"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Property Type</label>
                        <div class="purpose inr_purpose">
                            @if(isset($property_types) && !empty($property_types))
                                @foreach($property_types as $pro_type)
                                    <div class="form-check-inline">
                                        <label class="form-check-label custom_label">
                                            <input type="radio" class="form-check-input post_home property_type_val" name="property_type_val" value="{{@$pro_type['id']}}">        {{@$pro_type['property_type']}}
                                            <span class="checkmark radio"></span>
                                        </label>                                            
                                    </div>
                                @endforeach
                            @endif
                            <!-- <div class="form-check-inline">
                                <label class="form-check-label custom_label">
                                    <input type="radio" class="form-check-input post_plot" name="optradio1">Commercial
                                    <span class="checkmark radio"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label custom_label">
                                    <input type="radio" class="form-check-input post_comm" name="optradio1">commercial residential
                                    <span class="checkmark radio"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label custom_label">
                                    <input type="radio" class="form-check-input post_hotel" name="optradio1">hotel
                                    <span class="checkmark radio"></span>
                                </label>
                            </div> -->
                        </div>
                        <div class="my_dropdown">
                            <div id="subproperty_area">  
                                   
                            </div>
                        </div>
                        <div class="my_dropdown_plot">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="" checked>residential plots
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="">commercial plots
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="">Agricultural land
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="">industrial land
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="">plot file
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_plot" class="form-check-input" value="">plot form
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_dropdown_comm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="" checked>office
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="">factory
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="">building
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="">shop
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="">warehouse
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_comm_plot" class="form-check-input" value="">other
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_dropdown_hotel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_hotel" class="form-check-input" value="" checked>Hotel
                                        </label>
                                    </div>                       
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="sub_hotel" class="form-check-input" value="">Apartment Hotel
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select City</label>
                                <select class="niceselc form-control">
                                    <option data-display="Select City">Select City</option>
                                    <option>Sharjah</option>
                                    <option>Al Ain</option>
                                    <option>Al Gharbia</option>
                                    <option>Fujairah</option>
                                    <option>Dibba</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label>Location</label>
                        <div class="input-group">
                            <div id="map"></div>
                            <input type="text" id="pac-input" class="form-control" name="location" placeholder="Map Location" value="">
                            <label class="error" for="pac-input"></label>
                        </div>
                    </div>
                </div>
                <div class="prop_new_detail">
                    <div class="pern-info text-left">
                        <h4>Property detail</h4>
                    </div>
                    <div class="part1">
                        <div class="property_detail">
                            <div class="form-group">
                                <label>Property Title</label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Property Description</label>
                                <textarea class="form-control my_ctrl" rows="5" placeholder="Write your description here..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rental Price</label>
                                <input type="text" name="" class="form-control" placeholder="(PKR) Number Only">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Land Area</label>
                                        <input type="text" name="" class="form-control" placeholder="">
                                    </div>       
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <select class="niceselc form-control">
                                            <option data-display="Select City">Select Unit</option>
                                            <option>Square Feet</option>
                                            <option>Square Meter</option>
                                            <option>Square Yard</option>
                                            <option>Marla</option>
                                        </select>
                                    </div>       
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bedrooms</label>
                                        <select class="niceselc form-control">
                                            <option data-display="Select City">Select</option>
                                            <option>Studio</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>5</option>
                                        </select>
                                    </div>       
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bathrooms</label>
                                        <select class="niceselc form-control">
                                            <option data-display="Select City">Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>5</option>
                                        </select>
                                    </div>       
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Expires After</label>
                                        <select class="niceselc form-control">
                                            <option data-display="Select City">Select</option>
                                            <option>1 Month</option>
                                            <option>3 Month</option>
                                            <option>6 Month</option>
                                        </select>
                                    </div>       
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="add_rental_prop">
                    <div class="pern-info text-left">
                        <h4>rental price detail</h4>
                    </div>
                    <div class="part1">
                        <div class="rent-info">
                            <form>
                                <div class="form-group">
                                    <label>Minimum Contract Period:</label>
                                    <select>
                                        <option>Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <select>
                                        <option>Select</option>
                                        <option>Year</option>
                                        <option>Month</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Rental Price: (PKR):</label>
                                    <input type="text" name="price">
                                </div>
                                <div class="form-group">
                                    <label>Number of cheques:</label>
                                    <select id="cheq_sel">
                                        <option>Select</option>
                                        <option value="allcheq">1</option>
                                        <option value="allcheq">2</option>
                                        <option value="allcheq">3</option>
                                        <option value="allcheq">4</option>
                                    </select>
                                </div>
                                <div class="cheq_det" id="cheq_det">
                                    <div class="form-group">
                                        <label>Cheque Number:</label>
                                        <input type="text" name="cnum">
                                        <label>Date:</label>
                                        <input type="text" name="cdate" class="dtpckr">
                                    </div>
                                    <div class="form-group">
                                        <label>Bank:</label>
                                        <select>
                                            <option>Select</option>
                                            <option>SBI</option>
                                            <option>HDFC</option>
                                            <option>ICICI</option>
                                        </select>
                                        <label>Amount:</label>
                                        <input type="text" name="camt">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Security Deposit:</label>
                                    <input type="text" name="sp">
                                    <span>or</span>
                                    <input type="text" name="sd">
                                    <span class="end-10">number of month's rental amount</span>
                                </div>
                                <div class="form-group">
                                    <label>Agency Commission (Tenant):</label>
                                    <input type="text" name="sp">
                                    <span>or</span>
                                    <input type="text" name="sd">
                                    <span class="end-10">number of month's rental amount</span>
                                </div>
                                <div class="form-group">
                                    <label>Agency Commision Landlord:</label>
                                    <input type="text" name="sp">
                                    <span>or</span>
                                    <input type="text" name="sd">
                                    <span class="end-10">number of month's rental amount</span>
                                </div>
                                <div class="form-group">
                                    <label>Advance Rent:</label>
                                    <input type="text" name="sp">
                                    <span>or</span>
                                    <input type="text" name="sd">
                                    <span class="end-10">number of month's rental amount</span>
                                </div>
                                <div class="form-group">
                                    <label>Vacating Notice Period:</label>
                                    <input type="text" name="sp">           
                                    <span class="end-10">Month(s)</span>
                                </div>
                                
                                <div class="form-group">
                                    <div class="modi-btn text-center">
                                        <a href="#tenatadv" class="btn btn-primary" data-toggle="modal">Add Features</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hotel_part">
                    <div class="pern-info text-left">
                        <h4>hotel details</h4>
                    </div>
                    <div class="hotel_ame">
                        <div class="pern-info text-left">
                            <h4>main amenities</h4>
                        </div>                    
                        <div class="ame_sec">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>85 smoke-free guestrooms</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>Restaurant and bar/lounge</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>Indoor pool</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>Health club</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>Laundry service</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="ht_inr_txt d-flex justify-content-between">
                                                    <div class="form-group">
                                                        <label>Wedding services</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" value="">
                                                        </div>                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                         
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Golf course</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Full-service spa</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Breakfast available</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Daily housekeeping</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Conference space</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="ht_inr_txt d-flex justify-content-between">
                                                <div class="form-group">
                                                    <label>Free WiFi and free parking</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" value="">
                                                    </div>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ar_prop">
                                    <div class="pern-info text-left">
                                        <h4>What’s around</h4>
                                    </div>
                                    <div class="my_10">
                                        <div class="row org-app-cont">
                                            <div class="col-sm-10 my_column">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Location</label>
                                                                <input type="text" name="location" class="form-control" placeholder="Enter Location">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Distance</label>
                                                                <input type="tel" name="distance" class="form-control" placeholder="Enter Distance">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-12">
                                                <div class="form-group text-center">
                                                    <label style="opacity: 0">ddsgsgsg</label>
                                                    <span class="ht_add_prop">
                                                        <i class="fas fa-plus-circle my_append"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my_10 appnd_data"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="modi-btn text-center">
                                <a href="#tenatadv" class="btn btn-primary" data-toggle="modal">Add Features</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add_img img_want">
                    <div class="pern-info text-left">
                        <h4>Add Images</h4>
                    </div>
                    <div class="part1">
                        <div class="drop_zon">
                            <div class="form-group">
                                <!-- certificate dropzone -->
                                <div class="drop_cert_serv dropzone">
                                    <div class="dz-message text-center needsclick">
                                        Drop/click to upload Store images.<br />
                                        <span>Only (JPG,JPEG,PNG,BMP) format supported.</span><br />
                                        <!-- <span style="color: #b94044;">Also Add Tag</span> -->
                                    </div>
                                </div>
                                <!-- certificate dropzone -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contct_detail">
                    <div class="pern-info text-left">
                        <h4>Contact Details</h4>
                    </div>
                    <div class="part1">
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <div class="form-group">
                                    <label class="listing">Listing Owner:</label>
                                    <select class="niceselc form-control">
                                        <option>Select</option>
                                        <option>Myself</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group">
                                    <label class="listing">Contact Person:</label>
                                    <input type="text" name="client" class="client_text_field form-control">
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group">
                                    <label class="listing">Phone:</label>
                                    <input type="tel" name="phone" class="client_text_field form-control">
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group">
                                    <label class="listing">Email:</label>
                                    <input type="text" name="email" class="client_text_field form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="modi-btn text-center">
                        <a href="#floorplan" class="btn btn-primary">PROCEED TO STEP 2</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>