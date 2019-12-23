<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.headLayout')
    <!-- <script type="text/javascript">
    $(document).on('click', '.user-profile.header-notification', function() {console.log('hello')
        $(this).children('.show-notification').slideToggle(500);
        $(this).toggleClass('active');
    });
</script> -->
</head>
<body>
	  
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                @include('admin.common.header')
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        @include('admin.common.sidebar') 
                        @yield('content') 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
