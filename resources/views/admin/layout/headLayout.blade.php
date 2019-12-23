<title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{url('public/admin/assets/images/unilife-icon.png')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/icon/themify-icons/themify-icons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/toastr.css')}}">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/css/jquery.mCustomScrollbar.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/assets/css/chartist/chartist.css')}}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
      <style type="text/css">
        .error{
          color: red;
        }

        .modal-open .daterangepicker {
            z-index: 9999999999;
        }
      </style>
        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('public/admin/js/assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/admin/js/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- <script type="text/javascript" src="{{url('public/js/assets/js/bootstrap/js/bootstrap.min.js')}}"></script> -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/js/assets/js/popper.js/popper.min.js')}}"></script> -->
<!-- Morris Chart js -->
<!-- <script src="{{url('public/js/assets/js/raphael/raphael.min.js')}}"></script> -->
<!-- <script src="{{url('public/js/assets/js/morris/morris.js')}}"></script> -->
<!-- <script src="{{url('public/js/assets/pages/chart/morris/morris-custom-chart.js')}}"></script> -->
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{url('public/admin/js/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{url('public/admin/js/assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<!-- <script src="{{url('public/js/assets/pages/widget/amchart/amcharts.min.js')}}"></script> -->
<!-- <script src="{{url('public/js/assets/pages/widget/amchart/serial.min.js')}}"></script> -->

<!-- Chart js -->
<script type="text/javascript" src="{{url('public/admin/admin/ckeditor/ckeditor.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script type="text/javascript" src="{{url('public/admin/js/assets/js/chart.js/Chart.js')}}"></script>

<!-- Todo js -->
<script type="text/javascript " src="{{url('public/js/assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<!-- <script type="text/javascript" src="{{url('public/js/assets/pages/dashboard/custom-dashboard.min.js')}}"></script> -->
<script type="text/javascript" src="{{url('public/admin/js/assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{url('public/admin/js/assets/js/SmoothScroll.js')}}"></script>
<script src="{{url('public/admin/js/assets/js/pcoded.min.js')}}"></script>
<script src="{{url('public/admin/js/assets/js/vartical-demo.js')}}"></script>
<script src="{{url('public/admin/js/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ url('public/admin/admin/assets/js/ajax_table/metronic.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="{{url('public/admin/toastr.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ url('public/admin/admin/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> --> 
<!-- for session flash -->
<script>
    @if(Session::has('success'))
// alert('dgfh');
        $(function () {
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "3000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            };
            toastr.success("{{ Session::get('success') }}");
        });
    @endif    
</script>

<script>
    @if(Session::has('error'))
        $(function () {
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "3000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            };
            toastr.error("{{ Session::get('error') }}");
        });
    @endif 
</script>
<script type="text/javascript">
    
    $(document).on('click','.fa-trash',function(){
        return confirm('Do you want to delete it ?')
            
    });
</script> 
