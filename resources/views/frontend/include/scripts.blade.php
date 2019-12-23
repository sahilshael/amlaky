<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.2.3.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 

<script src="{{asset('public/frontend/js/moment.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/toastr.min.js')}}"></script>
<script src="{{asset('public/frontend/js/swiper.js')}}"></script>
<script src="{{asset('public/frontend/js/waypoints.js')}}"></script>
<script src="{{asset('public/frontend/js/counterup.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="{{asset('public/frontend/js/bootstrap-datetimepicker.js')}}"></script>
<script defer src="{{asset('public/frontend/js/wow.js')}}"></script>
<script src="{{asset('public/frontend/js/dropzone.js')}}"></script>
<script src="{{asset('public/frontend/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap-multiselect.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="{{asset('public/frontend/js/utiles.js')}}"></script>


<script type="text/javascript">
	var swiper = new Swiper('.swiper_testimonial', {
		effect: 'coverflow',
		centeredSlides: true,
		loop: true,
		initialSlide: 1,
		keyboardControl: true,
		mousewheelControl: true,
		lazyLoading: true,
		preventClicks: false,
		slidesPerView: 3,
		preventClicksPropagation: false,
		lazyLoadingInPrevNext: true,
		pagination: {
	        el: '.swiper-pagination',
	    },
		coverflow: {
			rotate: 0,
			stretch: 0,
			depth: 250,
			modifier: 1,
			slideShadows : false,
		}
	});
</script>

<script>
    var swiper = new Swiper('.swiper_property', {
      slidesPerView: 3,
      slidesPerColumn: 2,
      spaceBetween: 30,
		loop: true,
		keyboardControl: true,
		mousewheelControl: true,
		lazyLoading: true,
		lazyLoadingInPrevNext: true,
    pagination: {
          el: '.swiper-pagination',
      },
		nextButton: '.swiper-button-next',
	   prevButton: '.swiper-button-prev',
    });
</script>

<!-- Service listing -->
<script>
    var swiper = new Swiper('.service-listing', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },    
    });
</script>
<!-- End -->

<script type="text/javascript">  	
  	var swiper = new Swiper('.swiper_main', {
		loop: true,
      	navigation: {
        	nextEl: '.swiper-button-next',
        	prevEl: '.swiper-button-prev',
      	},
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // $('.niceselc').selectpicker();
        $('.niceselc').select2();
        $('.dtpckr').datepicker();
    });
</script>

<script type="text/javascript">
	$('.counter').counterUp({
	    delay: 10,
	    time: 1000
	});
</script>

<script>
	$(window).on("scroll load" , function() {
		if ($(this).scrollTop() > 100){  
			$('.header').addClass("fixed_hedr");
			$('.logo_ch').find("img").attr('src', "{{asset('public/frontend/img/Amlaky.png')}}");
		}
		else {
			$('.header').removeClass("fixed_hedr");
			$('.logo_ch').find("img").attr('src', "{{asset('public/frontend/img/Amlakyw.png')}}");
			$('.innr_hedr .logo_ch').find("img").attr('src', "{{asset('public/frontend/img/Amlaky.png')}}");
		}
	});
</script>

<script>
	$(document).ready(function(){
       $('#datetimepicker12, .datetimepicker12').datetimepicker({
            inline: true,
            sideBySide: true
        });
	});
</script>

<!-- <script>
	$(document).ready(function(){
      $('.faq_text').click(function(){ 
        $(this).next().slideToggle('normal');        
        $('.faq_content').not($(this).next()).slideUp('normal');
      });
	});
</script> -->

<script>
    (function($) {
      $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

      $('.accordion a').click(function(j) {
          var dropDown = $(this).closest('li').find('p');

          $(this).closest('.accordion').find('p').not(dropDown).slideUp();

          if ($(this).hasClass('active')) {
              $(this).removeClass('active');
          } else {
              $(this).closest('.accordion').find('a.active').removeClass('active');
              $(this).addClass('active');
          }
          dropDown.stop(false, true).slideToggle();

          j.preventDefault();
      });
    })(jQuery);
</script>

<script>
    $(".f_minus").hide();
    $('.faq_content').on('shown.faq_content', function(){
        $(this).parent(".faq_list").find(".f_plus").removeClass("f_plus").addClass("f_minus");
        }).on('hidden.faq_content', function(){
        $(this).parent(".faq_list").find(".f_minus").removeClass("f_minus").addClass("f_plus");
        });
</script>

<script>
	$('.hide_div').hide();
	$(document).ready(function(){
        $('.mon_div').click(function(){
           $('.hide_div').slideToggle();
        });
	});
</script>
<script>
	$('#yr_hide_div').hide();
	$(document).ready(function(){
      $('#year_div').click(function(){
          $('#yr_hide_div').slideToggle();
      });
	});
</script>

<!-- hoverable dropdown menu-->

<script>
	$(document).ready(function(){
        $('ul.navbar-nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay().fadeIn(200);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay().fadeOut(200);
		});
	});
</script>
<script>
    $(document).ready(function(){
        $('ul.navbar-nav li.set_dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay().fadeIn(200);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay().fadeOut(200);
        });
    });
</script>
<!-- End -->

<!--Menu Toggle class -->

<script>
	$(document).ready(function(){
      $('.menu_bar').click(function(){
      	$(this).closest('.row').toggleClass('menu-side');
      });
	});
</script>

<!-- End -->

<script>
    var swiper = new Swiper('.view_prop', {
      slidesPerView: 3,
      spaceBetween: 30,
		loop: true,
		keyboardControl: true,
		mousewheelControl: true,
		lazyLoading: true,
		lazyLoadingInPrevNext: true,
		nextButton: '.swiper-button-next',
	   prevButton: '.swiper-button-prev',
    });
</script>

<script>
	$(".input_div").hide();
	$(".cross").hide();
	$(document).ready(function(){
       $(".my_search").click(function(){
          $(".input_div").animate({width: 'toggle'}, function(){
          	$(".my_search").hide();
          	$(".cross").show();
          });
       });
       $(".cross").click(function(){
          $(".input_div").animate({width: 'toggle'}, function(){
          	$(".my_search").show();
          	$(".cross").hide();
          });
       });
	});
</script>
<script>
	$(".my_dropdown").hide();
	$(document).ready(function(){
       $(".my_homes").click(function(){
        $(".my_dropdown_plot").hide();
        $(".my_dropdown_comm").hide();
        $(".my_dropdown_hotel").hide();
          $(".my_dropdown").slideToggle('normal');
       });
	});
</script>
<script>
	$(".my_dropdown_plot").hide();
	$(document).ready(function(){
       $(".my_plots").click(function(){
       	$(".my_dropdown").hide();
       	$(".my_dropdown_comm").hide();
        $(".my_dropdown_hotel").hide();
           $(".my_dropdown_plot").slideToggle('normal');
       });
	});
</script>
<script>
	$(".my_dropdown_comm").hide();
	$(document).ready(function(){
       $(".my_comm").click(function(){
       	$(".my_dropdown").hide();
       	$(".my_dropdown_plot").hide();
        $(".my_dropdown_hotel").hide();
           $(".my_dropdown_comm").slideToggle('normal');
       });
	});
</script>
<script>
  $(".my_dropdown_hotel").hide();
  $(document).ready(function(){
       $(".my_hotel").click(function(){
        $(".my_dropdown").hide();
        $(".my_dropdown_plot").hide();
        $(".my_dropdown_comm").hide();
        $(".my_dropdown_hotel").slideToggle('normal');
       });
  });
</script>
<script>
	$(".wanted").hide();
	$(document).ready(function(){
       $(".my_want").click(function(){
       	$(".wanted").show();
       });
	});
</script>
<script>
	// $(".wanted").hide();
	$(document).ready(function(){
       $(".my_sale , .my_rent").click(function(){
       	$(".wanted").hide();
       });
	});
</script>

<!-- rental price script -->
<script>
    $(".rental_prop_detail").hide();
    $(document).ready(function(){
       $(".my_sale").click(function(){
        $(".rental_prop_detail").hide();
        $(".sale_btn").show();
        $(".img_want").show();
        $(".sale_own").show();
        $(".want_show").hide();
       });
    });
</script>

<script>
    $(".rental_prop_detail").hide();
    $(document).ready(function(){
       $(".my_rent").click(function(){
        $(".rental_prop_detail").show();
        $(".sale_btn").hide();
        $(".img_want").show();
        $(".sale_own").hide();
        $(".want_show").hide();
       });
    });
</script>
<script>
    $(".rental_prop_detail").hide();
    $(document).ready(function(){
       $(".my_want").click(function(){
         $(".rental_prop_detail").hide();
        $(".sale_btn").hide();
        $(".img_want").hide();
        $(".sale_own").hide();
        $(".want_show").show();
       });
    });
</script>
<!-- End -->





<!-- <script>
  $('.advc_tsub').hide();    
  $(document).ready(function(){
    $(".land_pms").click(function(){
      $('.addprop_pms_form').show();
      $('.advc_tsub').hide();
    });
    $(".land_list").click(function(){
      $('.addprop_pms_form').hide();
      $('.advc_tsub').show();
    });
  });
</script> -->
<!-- <script>
  $(document).ready(function(){
    $(".land_list").click(function(){
      $(".landlord_purpose").css({
            'background': 'unset',
            'pointer-events': 'unset'
      })
    });
  });
</script> -->
<script>
    // $(".for_list").hide();
    // $(document).ready(function(){
    //   $(".land_list").click(function(){
    //     $(".for_list").show();
    //     $(".for_pms").hide();
    //   });
    // });
    // $(".for_pms").hide();
    $(document).ready(function(){
      $(".land_pms").click(function(){
        $(".for_list").hide();
        $(".for_pms").show();
      });
    });
</script>
<script>
	$(".p_features , .p_minus").hide();
	$(document).ready(function(){
     $(".p_featr").click(function(){
       $(this).closest(".prop_features").find(".p_features").slideToggle();
       $(this).find(".p_plus").toggleClass('fas fa-plus fas fa-minus');
     });
	});
</script>
<script>
  $("#date_div").hide();
  $(document).ready(function(){
      $("#fac_select").on('change', function(){
         if(this.value == 'fac_mangt'){
              $("#date_div").show();
         }
         else{
            $("#date_div").hide();
         }
      });
  });
</script>

<!-- add tenant rental script -->
<script>
  $("#cheq_det").hide();
  $(document).ready(function(){
      $("#cheq_sel").on('change', function(){
          if(this.value == 'allcheq'){
            $("#cheq_det").show();
         }
         else{
            $("#cheq_det").hide();
         }
      });
  });
</script>
<!-- End -->

<script>
  $(".el_agmt").hide();
  $(".staff_check").click(function() {
      if($(this).is(":checked")) {
          $(this).closest('.single-usr').find(".el_agmt").show();
      } else {
        $(this).closest('.single-usr').find(".el_agmt").hide();
      }
  });
</script>

<!-- For multiple checkbox is checked then show button -->

<script>
  $(".l_agmt").hide();
  $(".staff_check").click(function() {
      if($('.staff_check').is(":checked")) {
        $(".l_agmt").show();
      } else {
        $(".l_agmt").hide();
      }
  });
</script>

<!-- End -->

<script type="text/javascript">
    $(document).ready(function() {
        $('.choose-amenity').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script>
    $(function(){
        $("#user-edit-alert").click(function(){
            $("#manage_alert").hide();
            $(".hide").show();
        });
    });
</script>
<!-- End -->

<!-- Dropzone Script -->

<script>
    Dropzone.autoDiscover = false;
    $('.dropzone').dropzone({ url: "/ajax_file_upload_handler/" });
</script>

<!-- End -->

<!-- Client Detail -->

<script>
  $(".client_choose, .exist_client").hide();
  $(".client_check").click(function() {
      if($('.client_check').is(":checked")) {
        $(".client_choose").show();
      } else {
        $(".client_choose, .exist_client, .new_client").hide();
      }
  });
</script>

<!-- End -->

<!-- New member form -->

<script>
    $(".new_client").hide();
    $(document).ready(function(){
       $(".new_mem_form").click(function(){
        $(".new_client").show();
        $(".exist_client").hide();
       });
    });
</script>

<script>    
    $(document).ready(function(){
       $(".new_exist_form").click(function(){
        $(".exist_client").show();
        $(".new_client").hide();
       });
    });
</script>

<script>    
    $(".advc_sub_form").hide();
    $(document).ready(function(){
       $(".quick_btn").click(function(){
        $(".quick_sub_form").show();
        $(".advc_sub_form").hide();
        $(".service_form").hide();
       });
    });
</script>

<script>    
    $(".quick_sub_form").hide();
    $(document).ready(function(){
       $(".advc_btn").click(function(){
        $(".advc_sub_form").show();
        $(".quick_sub_form").hide();
        $(".service_form").hide();
       });
    });
</script>
<script>    
    // $(".service_form").hide();
    $(document).ready(function(){
       $(".ser_list").click(function(){
        $(".service_form").show();
        $(".quick_sub_form").hide();
        $(".advc_sub_form").hide();
       });
    });
</script>

<!-- End -->

<!-- Owl carousel -->
<script>
  $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        center:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        URLhashListener:true,
        autoplayHoverPause:true,
        dots: false,
        startPosition: 'URLHash'
    });

</script>
<!-- End -->

<!-- smooth scrolling -->
<script>
    $("a.s_link").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
        scrollTop: position
    }, 500 );
    });
</script>

<!-- table dropdown -->

 <script>
     $("tr.datarow, .tab_minus").hide();
        $(document).ready(function(){
            $(".tab_plus").click(function(){
                $(this).closest('tr').nextUntil('tr.main-row').slideToggle('normal');
                $(this).closest('.main-row').find(".tab_minus").show();
                $(this).hide();
            });
            $(".tab_minus").click(function(){
                $(this).closest('tr').nextUntil('tr.main-row').slideToggle('normal');
                $(this).hide();
                $(this).closest('.main-row').find(".tab_plus").show();
            });
        });
</script>

<!-- End -->

<!-- Tooltip script-->
<script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
</script>
<!-- End -->

<!-- landlord sidebar scripts -->
<script>
    $('.tenants_sec').hide();
    $(document).ready(function(){
        $('.tenant_list').click(function(){
            $(this).find('.tenants_sec').slideToggle();
            $(this).closest('.tenant_list').find('.arrowd').toggleClass('down');
        });
    });
</script>

<script>
    $('.user_sec').hide();
    $(document).ready(function(){
        $('.user_rlist').click(function(){
            $(this).find('.user_sec').slideToggle();
            $(this).closest('.user_rlist').find('.arrowd').toggleClass('down');
        });
    });
</script>
<!-- End -->

<!-- add floorplan modal -->
<script>
  $(document).ready(function(){
    $(".floorplan").click(function(){
      $('#myfloorplan').modal('show');
    });
  });
</script>
<script>
  $(document).ready(function(){
    $(".document").click(function(){
      $('#mydocument').modal('show');
    });
  });
</script>
<script>
  $(document).ready(function(){
    $(".video").click(function(){
      $('#myvideos').modal('show');
    });
  });
</script>
<!-- End -->

<!-- create a team -->
<script>
  $('.sub_team').hide();  
  $(document).ready(function(){
    $('.my_subteam').click(function(){
      $('.sub_team').show();
    });
    $('.my_new_team').click(function(){
      $('.sub_team').hide();
    });
  });
</script>
<!-- End -->