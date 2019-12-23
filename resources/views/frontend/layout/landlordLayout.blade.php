<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title')</title>
        @include('frontend.include.mastercss')
        <style>
        	.sec_heading{
        		padding-top: 13px;
        		margin-bottom: 17px;
        	}
        	.search_sec .sec_heading::before, .search_sec .sec_heading::after{
			    position: absolute;
			}
			.outer_tab_head::before {
			    height: 30px;
			}
			.outer_tab_head::after {
			    height: 15px;
			}
        </style>
    </head>
    <body>

        <div class="page-wrapper">
            @include('frontend.include.dashboardHeader')

            <div class="home_page_wrapper staff_work_status tent_land_dash">
				@yield('content')
				@include('frontend.include.footer')
            </div>
        </div>
        @include('frontend.include.scripts')
        @yield('scripts')
        <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>
        <script type="text/javascript">
        	// Example with single object
        	$('.video-play-icon').magnificPopup({
        		items: {
        			src: 'https://vimeo.com/195304295'
        		},
			    type: 'iframe' // this is default type
			});
        </script>
        <script>
            @if(Session::has('success'))
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
                      "timeOut": "5000",
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
                      "timeOut": "5000",
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
        <script>
                function successMessageDisplay(message) {
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
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
                    toastr.success(message);
                }; 
        </script>
    </body>
</html>