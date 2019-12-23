@extends('frontend.layout.defaultLayout')
@section('title','Amlaky-Homepage')
@section('content')
	<section class="work_sec withBg">
		<div class="container">
			<div class="wrap_how_work">
				<div class="row">
    				<div class="col-sm-6">
            			<div class="sec_heading text-left">
            				<p>Lorem ipsum dolor sit amet elit</p>
            				<h2>How It Works</h2>
            			</div>
    					<div class="text_how"><strong>Amlaky</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip exea. </div>
    					<div class="row features_wrap">
                            <!-- Feature Block -->
                            <div class="feat_block col-lg-6 col-md-6 col-sm-12">
                                <div class="inn_box">
                                    <span class="icon far fa-building"></span>
                                    <h4><a href="aboutUs.php">Buy Property</a></h4>
                                    <!-- <h4><a href="javascript:;">List Your Property</a></h4> -->
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feat_block col-lg-6 col-md-6 col-sm-12">
                                <div class="inn_box">
                                    <span class="icon fas fa-home"></span>
                                    <h4><a href="aboutUs.php">Rent Property</a></h4>
                                    <!-- <h4><a href="javascript:;">List Your Services</a></h4> -->
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feat_block col-lg-6 col-md-6 col-sm-12">
                                <div class="inn_box">
                                    <span class="icon fas fa-landmark"></span>
                                    <h4><a href="aboutUs.php">Real Estate Kit</a></h4>
                                    <!-- <h4><a href="propertymanagement.php">Subscribe To PMS</a></h4> -->
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feat_block col-lg-6 col-md-6 col-sm-12">
                                <div class="inn_box">
                                    <span class="icon fas fa-store-alt"></span>
                                    <h4><a href="aboutUs.php">Sale Property</a></h4>
                                    <!-- <h4><a href="javascript:;">Area guide</a></h4> -->
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                        </div>
    				</div>	
    				<div class="col-sm-6">
    					<div class="video_box pos_rel">
                            <figure class="image_how"><img src="{{asset('public/frontend/img/prop5.jpeg')}}" class="img-fluid" alt=""></figure>
                            <a class="play_now"><i class="icon fa fa-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
    				</div>
    			</div>
			</div>
		</div>
	</section>

	<!-- banner-2 -->
	  <section class="search_sec banner">
	  		<img src="{{asset('public/frontend/img/newbanr.png')}}" class="img-fluid">
	  		<div class="wrap_form text-center">
				<div class="wrp_prpp text-left">
					<div class="row">
						<div class="col-sm-12">
	            			<div class="sec_heading outer_tab_head text-left">
	            				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            			</div>
        					<div class="outer-tab">
        						<div class="outer-inr-tab">
	    							<div class="justify-content-left">
		    							<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
		    								<li class="nav-item">
		    									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#search-prop" role="tab" aria-controls="pills-home" aria-selected="true">Search Properties</a>
		    								</li>
		    								<li class="nav-item">
		    									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#search-service" role="tab" aria-controls="pills-profile" aria-selected="false">Search Services</a>
		    								</li>
		    							</ul>
		    						</div>
		    						<div class="tab-content" id="pills-tabContent">
		    							<div class="tab-pane fade show active" id="search-prop" role="tabpanel" aria-labelledby="pills-home-tab">
					    					<div class="search_tabs">
					    						<div class="tabs_amlaky">
					    							<div class="d-flex justify-content-left">
						    							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						    								<li class="nav-item">
						    									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
						    								</li>
						    								<li class="nav-item">
						    									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
						    								</li>
						    								<li class="nav-item">
						    									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-wanted" role="tab" aria-controls="pills-profile" aria-selected="false">Wanted</a>
						    								</li>
						    								<li class="nav-item">
						    									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-project" role="tab" aria-controls="pills-profile" aria-selected="false">Project</a>
						    								</li>
						    							</ul>
						    						</div>
					    							<div class="tab-content" id="pills-tabContent">
					    								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Select City">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Location</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Property Type</option>
							                                                        <option value="1">Apartments</option>
							                                                        <option value="2">Garages</option>
							                                                        <option value="3">Flats</option>
							                                                        <option value="4">Villas</option>
							                                                        <option value="4">Commercial</option>
							                                                        <option value="4">PLots</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Beds (Any)</option>
							                                                        <option value="1">1</option>
							                                                        <option value="2">2</option>
							                                                        <option value="3">3</option>
							                                                        <option value="4">4</option>
							                                                        <option value="4">5</option>
							                                                        <option value="4">5 +</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Price">Price</option>
							                                                        <option value="1">Less than $10,000</option>
							                                                        <option value="1">$10,000 - $20,000</option>
							                                                        <option value="1">$20,000 - $40,000</option>
							                                                        <option value="1">$40,000 - $80,000</option>
							                                                        <option value="1">More than $1,00,000</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Find Property</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Select City">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Location</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Property Type</option>
							                                                        <option value="1">Apartments</option>
							                                                        <option value="2">Garages</option>
							                                                        <option value="3">Flats</option>
							                                                        <option value="4">Villas</option>
							                                                        <option value="4">Commercial</option>
							                                                        <option value="4">PLots</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Beds (Any)</option>
							                                                        <option value="1">1</option>
							                                                        <option value="2">2</option>
							                                                        <option value="3">3</option>
							                                                        <option value="4">4</option>
							                                                        <option value="4">5</option>
							                                                        <option value="4">5 +</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Price">Price</option>
							                                                        <option value="1">Less than $10,000</option>
							                                                        <option value="1">$10,000 - $20,000</option>
							                                                        <option value="1">$20,000 - $40,000</option>
							                                                        <option value="1">$40,000 - $80,000</option>
							                                                        <option value="1">More than $1,00,000</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Find Property</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    								<div class="tab-pane fade" id="pills-wanted" role="tabpanel" aria-labelledby="pills-profile-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Select City">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Location</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Property Type</option>
							                                                        <option value="1">Apartments</option>
							                                                        <option value="2">Garages</option>
							                                                        <option value="3">Flats</option>
							                                                        <option value="4">Villas</option>
							                                                        <option value="4">Commercial</option>
							                                                        <option value="4">PLots</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Beds (Any)</option>
							                                                        <option value="1">1</option>
							                                                        <option value="2">2</option>
							                                                        <option value="3">3</option>
							                                                        <option value="4">4</option>
							                                                        <option value="4">5</option>
							                                                        <option value="4">5 +</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Price">Price</option>
							                                                        <option value="1">Less than $10,000</option>
							                                                        <option value="1">$10,000 - $20,000</option>
							                                                        <option value="1">$20,000 - $40,000</option>
							                                                        <option value="1">$40,000 - $80,000</option>
							                                                        <option value="1">More than $1,00,000</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Find Property</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    								<div class="tab-pane fade" id="pills-project" role="tabpanel" aria-labelledby="pills-profile-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Select City">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<input type="text" name="" class="form-control" placeholder="Project Title">
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Property Type</option>
							                                                        <option value="1">Apartments</option>
							                                                        <option value="2">Garages</option>
							                                                        <option value="3">Flats</option>
							                                                        <option value="4">Villas</option>
							                                                        <option value="4">Commercial</option>
							                                                        <option value="4">PLots</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Area (Sq. Ft.)">Area (Sq. Ft.)</option>
							                                                        <option value="1">200</option>
							                                                        <option value="2">200 - 400</option>
							                                                        <option value="3">420 - 600</option>
							                                                        <option value="4">700 - 900</option>
							                                                        <option value="4">1000 - 1125</option>
							                                                        <option value="4">1125 +</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Price">Price</option>
							                                                        <option value="1">Less than $10,000</option>
							                                                        <option value="1">$10,000 - $20,000</option>
							                                                        <option value="1">$20,000 - $40,000</option>
							                                                        <option value="1">$40,000 - $80,000</option>
							                                                        <option value="1">More than $1,00,000</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Find Property</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    							</div>
					    						</div>
					    					</div>
		    							</div>
		    							<div class="tab-pane fade show" id="search-service" role="tabpanel" aria-labelledby="pills-search-tab">
		    								<div class="search_tabs">
					    						<div class="tabs_amlaky">
					    							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					    								<li class="nav-item">
					    									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-partner" role="tab" aria-controls="pills-partner" aria-selected="true">Partners</a>
					    								</li>
					    								<li class="nav-item">
					    									<a class="nav-link" id="pills-products-tab" data-toggle="pill" href="#pills-products" role="tab" aria-controls="pills-products" aria-selected="false">Products</a>
					    								</li>
					    								<li class="nav-item">
					    									<a class="nav-link" id="pills-service-tab" data-toggle="pill" href="#pills-service" role="tab" aria-controls="pills-service" aria-selected="false">Services</a>
					    								</li>
					    							</ul>
					    							<div class="tab-content" id="pills-tabContent">
					    								<div class="tab-pane fade show active" id="pills-partner" role="tabpanel">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<input type="text" name="partner" class="form-control" placeholder="Enter Partner Keyword">
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Select Product</option>
							                                                        <option value="1">Apartments</option>
							                                                        <option value="2">Garages</option>
							                                                        <option value="3">Flats</option>
							                                                        <option value="4">Villas</option>
							                                                        <option value="4">Commercial</option>
							                                                        <option value="4">PLots</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Select City First</option>
							                                                        <option value="1">1</option>
							                                                        <option value="2">2</option>
							                                                        <option value="3">3</option>
							                                                        <option value="4">4</option>
							                                                        <option value="4">5</option>
							                                                        <option value="4">5 +</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Search</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    								<div class="tab-pane fade" id="pills-products" role="tabpanel" aria-labelledby="pills-profile-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<input type="text" name="partner" class="form-control" placeholder="Enter Product Keyword">
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-lg col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Select Category</option>
							                                                        <option value="1">Home Construction</option>
							                                                        <option value="2">Bath</option>
							                                                        <option value="3">Decor</option>
							                                                        <option value="4">Furniture</option>
							                                                        <option value="4">Wardrobe</option>
							                                                        <option value="4">Kitchen</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Select Partner</option>
							                                                        <option value="1">Lahore Builders</option>
							                                                        <option value="2">Lahore Builders</option>
							                                                        <option value="3">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Search</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    								<div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-profile-tab">
					    									<div class="tab_cntnt">
					    										<form>
					    											<div class="row">
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<input type="text" name="partner" class="form-control" placeholder="Enter Service Keyword">
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Location">Select City</option>
							                                                        <option value="1">Dubai</option>
							                                                        <option value="2">Abu Dhabi</option>
							                                                        <option value="3">Sharjah</option>
							                                                        <option value="4">Al Ain</option>
							                                                        <option value="4">Ajman</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Property Type">Select Category</option>
							                                                        <option value="1">Banks</option>
							                                                        <option value="2">Insurance</option>
							                                                        <option value="3">Architects</option>
							                                                        <option value="4">Interior Designers</option>
							                                                        <option value="4">Project Management</option>
							                                                        <option value="4">Packers</option>
							                                                    </select>
					    													</div>
					    												</div>
					    											</div>
					    											<div class="row">
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<select class="niceselc form-control">
							                                                        <option data-display="Beds (Any)">Select Partner</option>
							                                                        <option value="1">Lahore Builders</option>
							                                                        <option value="2">Lahore Builders</option>
							                                                        <option value="3">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                        <option value="4">Lahore Builders</option>
							                                                    </select>
					    													</div>
					    												</div>
					    												<div class="col-md-4 col-sm-6">
					    													<div class="form-group">
					    														<button class="btn btn-primary wid100" type="button"> Search</button>
					    													</div>
					    												</div>
					    											</div>
					    										</form>
					    									</div>
					    								</div>
					    							</div>
					    						</div>
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
	<!-- End -->
	

	<section class="propert_sec">
		<div class="container">
			<div class="sec_heading text-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h2>Popular Properties</h2>
			</div>
			<div class="wrap_properties">
				<div class="swiper_property">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/workbg.jpg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<!-- <span class="featured">Featured</span> -->
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop2.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<!-- <span class="featured">Featured</span> -->
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop3.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop4.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop5.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<!-- <span class="featured">Featured</span> -->
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop6.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<!-- <span class="featured">Featured</span> -->
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop7.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="list_item compact">
								<a href="javascript:;" class="list_img">
									<div class="list_badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="list_img_meta">
										<span class="list_ttl">Serene Uptown <i><span class="fas fa-location-arrow"></span> Little Lonsdale St, Melbourne  </i></span>
										<ul class="list_hid_meta">
											<li>Area <span>440 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="{{asset('public/frontend/img/prop8.jpeg')}}" alt="" class="img-fluid">
								</a>
							</div>
						</div>
					</div>
					<!-- Add Arrows -->
    				<div class="swiper-button-next"></div>
    				<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</section>

	

	<!-- testimonial section -->
	<section class="testimonial_sec">
		<div class="container">
			<div class="sec_heading text-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h2>Clients Testimonials</h2>
			</div>
		</div>
		<div class="container-fluid">
			<div class="swiper_testimonial">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/g1.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Jane Simpson</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/profile2.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Peter Fredman</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/profile2.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Smith Haufman</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/g1.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Jane Simpson</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/profile2.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Peter Fredman</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testi_single text-center">
							<img src="{{asset('public/frontend/img/profile2.jpg')}}" class="img-fluid">
							<p class="testi_desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="meta_testi">
								<h5>Smith Haufman</h5>
								<small>CEO, Simps Inc.</small>
							</div>
						</div>
					</div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</section>

	<!-- testimonial section -->

	<section class="pop_loc_sec">
		<div class="container">
			<div class="sec_heading text-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h2>Popular Locations</h2>
			</div>
			<div class="wrap_popular">
				<ul class="d-flex justify-content-around" type="none">
					<li><i class="fa fa-angle-right"></i> Dubai</li>
					<li><i class="fa fa-angle-right"></i> Abu Dhabi</li>
					<li><i class="fa fa-angle-right"></i> Sharjah</li>
					<li><i class="fa fa-angle-right"></i> Al Ain</li>
					<li><i class="fa fa-angle-right"></i> Ajman</li>
					<li><i class="fa fa-angle-right"></i> Al Gharbia</li>
					<li><i class="fa fa-angle-right"></i> Ras Al Khaimah</li>
					<li><i class="fa fa-angle-right"></i> Fujairah</li>
					<li><i class="fa fa-angle-right"></i> Dibba</li>
					<li><i class="fa fa-angle-right"></i> Um Al Quwain</li>
					<li><i class="fa fa-angle-right"></i> Dubai</li>
					<li><i class="fa fa-angle-right"></i> Abu Dhabi</li>
					<li><i class="fa fa-angle-right"></i> Sharjah</li>
					<li><i class="fa fa-angle-right"></i> Al Ain</li>
					<li><i class="fa fa-angle-right"></i> Ajman</li>
					<li><i class="fa fa-angle-right"></i> Al Gharbia</li>
					<li><i class="fa fa-angle-right"></i> Ras Al Khaimah</li>
					<li><i class="fa fa-angle-right"></i> Fujairah</li>
					<li><i class="fa fa-angle-right"></i> Dibba</li>
					<li><i class="fa fa-angle-right"></i> Um Al Quwain</li>
					<li><i class="fa fa-angle-right"></i> Dubai</li>
					<li><i class="fa fa-angle-right"></i> Abu Dhabi</li>
					<li><i class="fa fa-angle-right"></i> Sharjah</li>
					<li><i class="fa fa-angle-right"></i> Al Ain</li>
					<li><i class="fa fa-angle-right"></i> Ajman</li>
					<li><i class="fa fa-angle-right"></i> Al Gharbia</li>
					<li><i class="fa fa-angle-right"></i> Ras Al Khaimah</li>	
					<li><i class="fa fa-angle-right"></i> Um Al Quwain</li>
				</ul>
			</div>
		</div>
	</section>
@stop