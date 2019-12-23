@extends('frontend.layout.landlordLayout')
@section('title','Landlord Dashboard')
@section('content')
	<section class="sec_dashboard db_main">
        <div class="container-fluid">
            <div class="wrap_dash_sec view_prof_page view_usr"> <!-- change class -->
                <div class="row"> 
                    <div class="dash-side col-sm-3">
                        <div class="sidebar_wrap card_shd">
                            <!--  -->
                            @include('frontend.include.landlordSidebar')
                            <!--  -->
                        </div>
                    </div>
                    <div class="dash-content col-sm-9">
                        <div class="mainside_wrap">
                            <div class="main_cntnt_dash t_agrmt">
                                <div class="card_profile">
                                    <div class="buidwise_info">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="upr-cards">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="buil-gn">
                                                                <h4>portfolio overview</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="build_btn text-right">
                                                                <a href="#build_wise" class="" data-toggle="modal">
                                                                    <h4 class="agin_build">view against building wise</h4>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="upper-boxes">
                                                        <div class="row">
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-suitcase"></i>
                                                                        </div>
                                                                        <div class="dash-cont">total unit</div>
                                                                    </div>
                                                                    <div class="unit">100</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-window-restore"></i>
                                                                        </div>
                                                                        <div class="dash-cont">average rent</div>
                                                                    </div>
                                                                    <div class="unit">$400</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-wallet"></i>
                                                                        </div>
                                                                        <div class="dash-cont">gross rental income</div>
                                                                    </div>
                                                                    <div class="unit">$400</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-file-image"></i>
                                                                        </div>
                                                                        <div class="dash-cont">occupied</div>
                                                                    </div>
                                                                    <div class="unit">40</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-money-check"></i>
                                                                        </div>
                                                                        <div class="dash-cont">net rental income</div>
                                                                    </div>
                                                                    <div class="unit">$6000</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-chart-line"></i>
                                                                        </div>
                                                                        <div class="dash-cont">Total Receivable</div>
                                                                    </div>
                                                                    <div class="unit">$6000</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fab fa-bitbucket"></i>
                                                                        </div>
                                                                        <div class="dash-cont">Bucket 90 DPD total receivable</div>
                                                                    </div>
                                                                    <div class="unit">$200</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-palette"></i>
                                                                        </div>
                                                                        <div class="dash-cont">Maintenance Expense to net rental income</div>
                                                                    </div>
                                                                    <div class="unit">$500</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="fas fa-percentage"></i>
                                                                        </div>
                                                                        <div class="dash-cont">Bucket X to total Receivable Ratio</div>
                                                                    </div>
                                                                    <div class="unit">100</div>
                                                                </div>
                                                            </div>                                                      
                                                            <!-- <div class="col-4 col-md-4">
                                                                <div class="upr-card-detail">
                                                                    <div>
                                                                        
                                                                        <i class="fas fa-building"></i>
                                                                        </div>
                                                                            <div class="dash-cont">view against building wise  
                                                                    </div>
                                                                    <div class="unit">30</div>
                                                                </div>
                                                            </div> -->
                                                            <div class="col-3 col-md-3">
                                                                <div class="upr-card-detail uppr-nw-card">
                                                                    <div class="upr-data">
                                                                        <div class="dash-ico">
                                                                            <i class="far fa-money-bill-alt"></i>
                                                                        </div>
                                                                        <div class="dash-cont">Total cash outflow to rent collection ratio</div>
                                                                    </div>
                                                                    <div class="unit">$400</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bot-card">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="botc_info">
                                                                <span>cash outflow</span>
                                                                <div class="cen_txt cent-nw">
                                                                    <p>$7000</p>               
                                                                </div>
                                                                <!-- <p class="status">status</p> -->
                                                                <div class="bot_btn">
                                                                    <a href="javascript:;">building wise<i class="fa fa-fw fas fa-arrow-right"></i></a>      
                                                                    <a href="javascript:;">category wise<i class="fa fa-fw fas fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="botc_info">
                                                                <span>o/s complaints</span>
                                                                <div class="cen_txt cent-nw">
                                                                    <p>70</p>               
                                                                </div>
                                                                <!-- <p class="status">status</p> -->
                                                                <div class="bot_btn">
                                                                    <a href="javascript:;">building wise<i class="fa fa-fw fas fa-arrow-right"></i></a>      
                                                                    <a href="javascript:;">category wise<i class="fa fa-fw fas fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="botc_info">
                                                                <span>complaints TAT</span>
                                                                <div class="cen_txt cent-nw">
                                                                    <p>70</p>               
                                                                </div>
                                                                <!-- <p class="status">status</p> -->
                                                                <div class="bot_btn">
                                                                    <a href="javascript:;">building wise<i class="fa fa-fw fas fa-arrow-right"></i></a>      
                                                                    <a href="javascript:;">category wise<i class="fa fa-fw fas fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="botc_info">
                                                                <span>agreement expired</span>
                                                                <div class="cen_txt cent-nw">
                                                                    <p>50</p>               
                                                                </div>
                                                                <div class="bot_btn">
                                                                    <a href="javascript:;">building wise<i class="fa fa-fw fas fa-arrow-right"></i></a>      
                                                                    <a href="javascript:;">category wise<i class="fa fa-fw fas fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="feedback_sec">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="outer-card">
                                                                <span class="r_colt">
                                                                    <i class="fas fa-rss"></i>feedback score
                                                                </span>
                                                                <div class="rent-g-info">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <div class="new-outer-card">
                                                                                <div class="mon-pv mon-pv-circle-dot">
                                                                                    <div class="inr-com">
                                                                                        <span class="dot1">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">comfort</span>
                                                                                        <span class="right-pb">7.5</span>
                                                                                    </div>
                                                                                    <div class="inr-com">
                                                                                        <span class="dot2">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">facilities</span>
                                                                                        <span class="right-pb">5.0</span>
                                                                                    </div>
                                                                                    <div class="inr-com">
                                                                                        <span class="dot3">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">location</span>
                                                                                        <span class="right-pb">6.1</span>
                                                                                    </div>
                                                                                    <div class="inr-com">
                                                                                        <span class="dot4">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">cleanliness</span>
                                                                                        <span class="right-pb">4.4</span>
                                                                                    </div>
                                                                                    <div class="inr-com">
                                                                                        <span class="dot5">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">staff</span>
                                                                                        <span class="right-pb">7.5</span>
                                                                                    </div>
                                                                                    <div class="inr-com">
                                                                                        <span class="dot6">
                                                                                            <i class="fas fa-dot-circle"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">value for money</span>
                                                                                        <span class="right-pb">5.2</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="feed-chart">
                                                                                <canvas width="500" id="feedback"></canvas>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="graph_sec">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="outer-card">
                                                                <span class="r_colt">
                                                                    <i class="fas fa-coins"></i>rent collection
                                                                </span>
                                                                <div class="rent-g-info">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="rent-chart">
                                                                                <canvas width="500" id="myChart"></canvas>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="new-outer-card">
                                                                                <ul class="mon-pv">
                                                                                    <li class="inr-com txt1">
                                                                                        <span class="dot1">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">this month</span>
                                                                                        <!-- <span class="right-pb">30</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt2">
                                                                                        <span class="dot2">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">budget</span>
                                                                                        <!-- <span class="right-pb">30</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt3">
                                                                                        <span class="dot3">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">last month</span>
                                                                                        <!-- <span class="right-pb">30</span> -->
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outer-btn text-center" id="outer-btn">
                                                                    <a href="javascript:;">building wise
                                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="outer-card">
                                                                <span class="r_colt">
                                                                    <i class="fas fa-chart-line"></i>maintenance expense
                                                                </span>
                                                                <div class="rent-g-info">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="rent-chart">
                                                                                <canvas width="500" id="mainchart"></canvas>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="new-outer-card">
                                                                                <ul class="mon-pv">
                                                                                    <li class="inr-com txt1 list-group-horizontal">
                                                                                        <span class="dot1">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">this month</span>
                                                                                        <!-- <span class="right-pb">25</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt2">
                                                                                        <span class="dot2">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">budget</span>
                                                                                        <!-- <span class="right-pb">40</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt3">
                                                                                        <span class="dot3">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">last month</span>
                                                                                        <!-- <span class="right-pb">55</span> -->
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outer-btn text-center" id="outer-btn">
                                                                    <a href="javascript:;">building wise
                                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="outer-card">
                                                                <span class="r_colt">
                                                                    <i class="fas fa-file-invoice"></i>occupancy
                                                                </span>
                                                                <div class="rent-g-info">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="rent-chart">
                                                                                <canvas width="500" id="occhart"></canvas>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="new-outer-card">
                                                                                <ul class="mon-pv">
                                                                                    <li class="inr-com">
                                                                                        <span class="dot1">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">this month</span>
                                                                                        <!-- <span class="right-pb">20</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com">
                                                                                        <span class="dot2">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">budget</span>
                                                                                        <!-- <span class="right-pb">75</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com">
                                                                                        <span class="dot3">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">last month</span>
                                                                                        <!-- <span class="right-pb">45</span> -->
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outer-btn text-center" id="outer-btn">
                                                                    <a href="javascript:;">building wise
                                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="outer-card">
                                                                <span class="r_colt">
                                                                    <i class="fas fa-people-carry"></i>staff performance
                                                                </span>
                                                                <div class="rent-g-info">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="rent-chart">
                                                                                <canvas width="500" id="staffchart"></canvas>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="new-outer-card">
                                                                                <ul class="mon-pv">
                                                                                    <li class="inr-com txt1">
                                                                                        <span class="dot1">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">this month</span>
                                                                                        <!-- <span class="right-pb">15</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt2">
                                                                                        <span class="dot2">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">budget</span>
                                                                                        <!-- <span class="right-pb">40</span> -->
                                                                                    </li>
                                                                                    <li class="inr-com txt3">
                                                                                        <span class="dot3">
                                                                                            <i class="fas fa-square"></i>
                                                                                        </span>
                                                                                        <span class="left-pb">last month</span>
                                                                                        <!-- <span class="right-pb">65</span> -->
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="outer-btn text-center" id="outer-btn">
                                                                    <a href="javascript:;">building wise
                                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                                    </a>
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
            </div>
        </div>
    </section>


@stop
@section('scripts')
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["This Month",   "Budget",   "Last Month"],
                datasets: [{    
                    data: [30, 30, 30], // Specify the data values array
                  
                    borderColor: ['#fff', '#fff', '#fff', '#fff'], // Add custom color border 
                    backgroundColor: ['#c00000', '#686f76', '#003889'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]},         
            options: {
                legend: {
                    display: false
                },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });

        var cty = document.getElementById("mainchart").getContext('2d');
        var myChart = new Chart(cty, {
            type: 'pie',
            data: {
                labels: ["This Month",   "Budget",   "Last Month"],
                datasets: [{    
                    data: [25, 40, 55], // Specify the data values array
                  
                    borderColor: ['#fff', '#fff', '#fff', '#fff'], // Add custom color border 
                    backgroundColor: ['#c00000', '#686f76', '#003889'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]},         
            options: {
                legend: {
                    display: false
                },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
        var ctz = document.getElementById("occhart").getContext('2d');
        var myChart = new Chart(ctz, {
            type: 'pie',
            data: {
                labels: ["This Month",   "Budget",   "Last Month"],
                datasets: [{    
                    data: [20, 75, 45], // Specify the data values array
                  
                    borderColor: ['#fff', '#fff', '#fff', '#fff'], // Add custom color border 
                    backgroundColor: ['#c00000', '#686f76', '#003889', '#00968896'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]},         
            options: {
                legend: {
                    display: false
                },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });

        var cta = document.getElementById("staffchart").getContext('2d');
        var myChart = new Chart(cta, {
            type: 'pie',
            data: {
                labels: ["This Month",   "Budget",   "Last Month"],
                datasets: [{    
                    data: [15, 40, 65], // Specify the data values array
                  
                    borderColor: ['#fff', '#fff', '#fff', '#fff'], // Add custom color border 
                    backgroundColor: ['#c00000', '#686f76', '#003889', '#00968896'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]},         
            options: {
                legend: {
                    display: false
                },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });

        var ctf = document.getElementById("feedback").getContext('2d');
        var myChart = new Chart(ctf, {
            type: 'pie',
            data: {
                labels: ["Comfort",   "facilities",   "Location", "Cleanliness", "Staff", "Value for money"],
                datasets: [{    
                    data: [7.5, 5.0, 6.1, 4.4, 7.5, 5.2], // Specify the data values array
                  
                    borderColor: ['#fff', '#fff', '#fff', '#fff'], // Add custom color border 
                    backgroundColor: ['#c00000', '#686f76', '#003889', '#34373b', '#006620', '#3484c9'], // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                }]},         
            options: {
                legend: {
                    display: false
                },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
    </script>
@stop