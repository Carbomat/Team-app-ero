( function ($) {	
			
        /* ---------------------------------------------- /*
         * Page Loader
         /* ---------------------------------------------- */
    
    $(document).ready(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1500);
    });

		    jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length ) {
                jQuery("li.dropdown ul").css("display", "none");
            }
       });  
       
       jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length && !jQuery(this).closest(".search-box-outer").length ) {
                jQuery('.navbar-collapse').removeClass('show');
             }})


      //Sticky Header 
      jQuery(window).bind('scroll', function () {
      if (jQuery(window).scrollTop() > 100) 
                {
                      jQuery('.header-sticky').addClass('stickymenu');

                } else {
                      jQuery('.header-sticky').removeClass('stickymenu');

                }
        });

        //Scroll to top
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        $('a[href="#totop"]').click(function() {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });

        $(".search-icon").click(function(e){
          e.preventDefault();
         });

          $('.custom-header-preset').click(function(e){
          e.preventDefault();
           $(".custom-header-preset-panel").toggle();
        });

        /* Preloader */
  $(window).on('load', function() {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
      var preloader = $('#preloader');
      setTimeout(function() {
        preloader.fadeOut(preloaderFadeOutTime);
      }, 500);
    }
    hidePreloader();
  }); 
  
				
}) ( jQuery);