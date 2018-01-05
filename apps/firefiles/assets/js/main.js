"use strict";


jQuery(document).ready(function ($) {

	$(window).load(function () {
		$(".loaded").fadeOut();
		$(".preloader").delay(1000).fadeOut("slow");
	});

    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });

    /*---------------------------------------------*
     * Scroll Total Navbar
     ---------------------------------------------*/

    $('body').scrollspy({
        target: '.navbar',
        offset: 160
    });

    /*---------------------------------------------*
     * Google Map Area
     ---------------------------------------------*/

    var map = new GMaps({
        el: '#map',
        lat: 23.535726,
        lng: 90.713344,
        scrollwheel: false
    });


    map.addMarker({
        lat: 23.535726,
        lng: 90.713344,
        title: 'Lima',
        infoWindow: {
            content: '<p>Daudkandi Bazar, Comilla</p>'
        }

    });
	
	/*---------------------------------------------*
     * Gallery Pop Up Animation
     ---------------------------------------------*/

    $('.gallery-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*---------------------------------------------*
     * Youtube Media
     ---------------------------------------------*/
    $('.youtube-media').magnificPopup({type: 'iframe'});

    /*---------------------------------------------*
     * Scroll Up
     ---------------------------------------------*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });



    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    $.localScroll();



    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

//    $('.statistic-counter').counterUp({
//        delay: 10,
//        time: 2000
//    });




    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

//        var wow = new WOW({
//            mobile: false // trigger animations on mobile devices (default is true)
//        });
//        wow.init();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

//    $('.testimonials').owlCarousel({
//        responsiveClass: true,
//        autoplay: false,
//        items: 1,
//        loop: true,
//        dots: true,
//        autoplayHoverPause: true
//
//    });


    //End
});
