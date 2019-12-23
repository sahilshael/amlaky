<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amlaky/reset password</title>
   
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.4.93/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public/admin/css/backend/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('public/admin/css/backend/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{url('public/admin/css/backend/style.css')}}">
    <link rel="shortcut icon" href="{{url('images/favicon.png')}}">
  

    <script src="{{url('public/admin/js/backend/vendor.bundle.base.js')}}"></script>
    <script src="{{url('public/admin/js/backend/vendor.bundle.addons.js')}}"></script>
    <script src="{{url('public/admin/js/backend/off-canvas.js')}}"></script>
    <script src="{{url('public/admin/js/backend/hoverable-collapse.js')}}"></script>
    <script src="{{url('public/admin/js/backend/template.js')}}"></script>
    <script src="{{url('public/admin/js/backend/settings.js')}}"></script>
    <script src="{{url('public/admin/js/backend/todolist.js')}}"></script>
    <script src="{{url('public/admin/js/bootstrap.js')}}"></script>
    <script src="{{url('public/admin/js/bootstrapValidator.min.js')}}"></script>
    <script src="{{url('public/admin/js/sweetalert.min.js')}}"></script>
    <script src="{{url('public/admin/js/validation.js')}}"></script>
     <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/backend/toastr.css')}}">
        <script src="{{asset('public/admin/js/backend/toastr.min.js')}}"></script>
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
                              "showDuration": "500",
                              "hideDuration": "3000",
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
                              "hideDuration": "3000",
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



  </head>
  <body>
  @yield('content')
  </body>
</html>  