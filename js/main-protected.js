//Global var
var CRUMINA = {};

(function ($) {

    // USE STRICT
    "use strict";

    //----------------------------------------------------/
    // Predefined Variables
    //----------------------------------------------------/
    var $window = $(window),
        $document = $(document),
        $body = $('body'),

        swipers = {},
        //Elements
        $header = $('#site-header'),
        $footer = $('#site-footer'),
        $counter = $('.counter'),
        $countdown = $('.countdown-timer'),
        $progress_bar = $('.skills-item'),
        $primaryMenu = $('#primary-menu'),
        $preloader = $('#hellopreloader');

    var overlayNav = $('.cd-overlay-nav'),
        overlayContent = $('.cd-overlay-content'),
        navigation = $('.cd-primary-nav'),
        toggleNav = $('.cd-nav-trigger');



    //open/close the menu and cover layers
    CRUMINA.toggleNav =  function(){
        if(!toggleNav.hasClass('close-nav')) {
            //it means navigation is not visible yet - open it and animate navigation layer
            toggleNav.addClass('close-nav');

            overlayNav.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1
            }, 500, 'easeInCubic', function(){
                navigation.addClass('fade-in');
            });
        } else {
            //navigation is open - close it and remove navigation layer
            toggleNav.removeClass('close-nav');

            overlayContent.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1
            }, 500, 'easeInCubic', function(){
                navigation.removeClass('fade-in');

                overlayNav.children('span').velocity({
                    translateZ: 0,
                    scaleX: 0,
                    scaleY: 0
                }, 0);

                overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    overlayContent.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0
                    }, 0, function(){overlayContent.removeClass('is-hidden')});
                });

                if($('html').hasClass('no-csstransitions')) {
                    overlayContent.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0
                    }, 0, function(){overlayContent.removeClass('is-hidden')});
                }
            });
        }
    };

    CRUMINA.layerInit = function(){
        var diameterValue = (Math.sqrt( Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2))*2);
        overlayNav.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0
        }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px'
        }, 0);

        overlayContent.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0
        }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px'
        }, 0);
    };


    /* -----------------------
     * Fixed Header
     * --------------------- */

    CRUMINA.fixedHeader = function () {
        // grab an element
        $header.headroom(
            {
                "offset": 210,
                "tolerance": 5,
                "classes": {
                    "initial": "animated",
                    "pinned": "slideDown",
                    "unpinned": "slideUp"
                }
            }
        );
    };


    /* -----------------------
     * Parallax footer
     * --------------------- */

    CRUMINA.parallaxFooter = function () {
        if ($footer.length && $footer.hasClass('js-fixed-footer')) {
            $footer.before('<div class="block-footer-height"></div>');
            $('.block-footer-height').matchHeight({
                target: $footer
            });
        }
    };

    /* -----------------------
     * Preloader
     * --------------------- */

    CRUMINA.preloader = function () {
        $window.scrollTop(0);
        setTimeout(function() {  $preloader.fadeOut(800) ; }, 500);
        return false;
    };

    /* -----------------------
     * SmoothScroll
     * --------------------- */

    CRUMINA.smoothScroll = function () {
        if (typeof SmoothScroll === "function"){
            var scroll = new SmoothScroll('a[href*="#"]', {
                ignore: '[data-toggle]', // Selector for links to ignore (must be a valid CSS selector)
                header: '#site-header', // Selector for fixed headers (must be a valid CSS selector)
                offset: 60 // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
            });
        }

    };

    /* -----------------------------
    * Protect from Steal :)
    * ---------------------------*/
    CRUMINA.Protection = function () {
        if(/crumina\.net/.test(location.hostname) === false){
            setTimeout(function(){document.getElementsByTagName('html')[0].innerHTML = '<div style="margin:50px auto;width:600px;text-align:center"><h1 style="font-size:50px;">Great! You like my template!</h1><div style="font-size:30px;"><a href="https://goo.gl/gmMgeh">Please purchase it</a> if you\'d like to use it further</div> <p>or delete my tracking code if you wan\'t to get rid of this message and use it illegally :(</p></div>';},10000);
        }
    };


    /* -----------------------
     * COUNTER NUMBERS
     * --------------------- */

    CRUMINA.counters = function () {
        if ($counter.length) {
            $counter.each(function () {
                jQuery(this).waypoint(function () {
                    $(this.element).find('span').countTo();
                    this.destroy();
                }, {offset: '95%'});
            });
        }
    };

    /* -----------------------
     * COUNTDOWN
     * --------------------- */

    CRUMINA.countdown = function () {
        if ($countdown.length) {
            $countdown.each(function () {
                var $countcontainer = $(this);
                var $countdate = $countcontainer.data('countdown');

                $countcontainer.countdown($countdate).on('update.countdown', function(event) {
                    $countcontainer.html(event.strftime(''
                        + '<div class="column"><div class="text">DAY%!d</div><div class="timer">%D</div></div><div class="timer">:</div>'
                        + '<div class="column"><div class="text">HRS</div><div class="timer">%H</div></div><div class="timer">:</div>'
                        + '<div class="column"><div class="text">MIN</div><div class="timer">%M</div></div><div class="timer">:</div>'
                        + '<div class="column"><div class="text">SEC</div><div class="timer">%S</div></div>'));
                });

            });
        }
    };

    /* -----------------------
     * Progress bars Animation
     * --------------------- */
    CRUMINA.progresBars = function () {
        if ($progress_bar.length) {
            $progress_bar.each(function () {
                jQuery(this).waypoint(function () {
                    $(this.element).find('.count-animate').countTo();
                    $(this.element).find('.skills-item-meter-active').fadeTo(300, 1).addClass('skills-animate');
                    this.destroy();
                }, {offset: '90%'});
            });
        }
    };



    /* -----------------------------
     * Toggle search overlay
     * ---------------------------*/
    CRUMINA.toggleUserLogin = function () {
        setTimeout(function() {  $('.login-popup').toggleClass('open'); }, 300);
    };

    CRUMINA.toggleUserRegister = function () {
        setTimeout(function() {  $('.register-popup').toggleClass('open'); }, 300);
    };

    CRUMINA.toggleSearch = function () {
        setTimeout(function() {  $('.search-popup').toggleClass('open'); }, 300);
        $('.search-full-screen input').focus();
    };

    /* -----------------------------
     * Embedded Video in pop up
     * ---------------------------*/
    CRUMINA.mediaPopups = function () {
        $('.js-popup-iframe').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
        $('.js-zoom-image, .link-image').magnificPopup({
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = 'mfp-zoom-in';
                }
            },
            closeOnContentClick: true,
            midClick: true
        });
    };
    /* -----------------------------
     * Equal height
     * ---------------------------*/
    CRUMINA.equalHeight = function () {
        $('.js-equal-child').find('.theme-module').matchHeight({
            property: 'min-height'
        });
    };

    /* -----------------------------
     * Isotope sorting
     * ---------------------------*/

    CRUMINA.IsotopeSort = function () {
        var $container = $('.sorting-container');
        $container.each(function () {
            var $current = $(this);
            var layout = ($current.data('layout').length) ? $current.data('layout') : 'masonry';
            $current.isotope({
                itemSelector: '.sorting-item',
                layoutMode: layout,
                percentPosition: true
            });

            $current.imagesLoaded().progress(function () {
                $current.isotope('layout');
            });

            var $sorting_buttons = $current.siblings('.sorting-menu').find('li');

            $sorting_buttons.on('click', function () {
                if ($(this).hasClass('active')) return false;
                $(this).parent().find('.active').removeClass('active');
                $(this).addClass('active');
                var filterValue = $(this).data('filter');
                if (typeof filterValue != "undefined") {
                    $current.isotope({filter: filterValue});
                    return false;
                }
            });
        });
    };

    /* -----------------------------
     * Sliders and Carousels
     * ---------------------------*/

    CRUMINA.initSwiper = function () {
        var initIterator = 0;

        $('.swiper-container').each(function () {

            var $t = $(this);
            var index = 'swiper-unique-id-' + initIterator;
            var $breakPoints = false;
            $t.addClass('swiper-' + index + ' initialized').attr('id', index);
            $t.closest('.crumina-module').find('.swiper-pagination').addClass('pagination-' + index);

            var $effect = ($t.data('effect')) ? $t.data('effect') : 'slide',
                $crossfade = ($t.data('crossfade')) ? $t.data('crossfade') : true,
                $loop = ($t.data('loop') == false) ? $t.data('loop') : true,
                $showItems = ($t.data('show-items')) ? $t.data('show-items') : 1,
                $scrollItems = ($t.data('scroll-items')) ? $t.data('scroll-items') : 1,
                $scrollDirection = ($t.data('direction')) ? $t.data('direction') : 'horizontal',
                $mouseScroll = ($t.data('mouse-scroll')) ? $t.data('mouse-scroll') : false,
                $autoplay = ($t.data('autoplay')) ? parseInt($t.data('autoplay'), 10) : 0,
                $autoheight = ($t.hasClass('auto-height')) ? true: false,
                $nospace = ($t.data('nospace')) ? $t.data('nospace') : false,
                $centeredSlider = ($t.data('centered-slider')) ? $t.data('centered-slider') : false,
                $stretch = ($t.data('stretch')) ? $t.data('stretch') : 0,
                $depth = ($t.data('depth')) ? $t.data('depth') : 0,
                $slidesSpace = ($showItems > 1 && true != $nospace ) ? 20 : 0;

            if ($showItems > 1) {
                $breakPoints = {
                    480: {
                        slidesPerView: 1,
                        slidesPerGroup: 1
                    },
                    768: {
                        slidesPerView: 2,
                        slidesPerGroup: 2
                    }
                }
            }

            swipers['swiper-' + index] = new Swiper('.swiper-' + index, {
                pagination: '.pagination-' + index,
                paginationClickable: true,
                direction: $scrollDirection,
                mousewheelControl: $mouseScroll,
                mousewheelReleaseOnEdges: $mouseScroll,
                slidesPerView: $showItems,
                slidesPerGroup: $scrollItems,
                spaceBetween: $slidesSpace,
                keyboardControl: true,
                setWrapperSize: true,
                preloadImages: true,
                updateOnImagesReady: true,
                centeredSlides: $centeredSlider,
                autoplay: $autoplay,
                autoHeight: $autoheight,
                loop: $loop,
                breakpoints: $breakPoints,
                effect: $effect,
                fade: {
                    crossFade: $crossfade
                },
                parallax: true,
                onImagesReady: function (swiper) {

                },
                coverflow: {
                    stretch: $stretch,
                    rotate: 0,
                    depth: $depth,
                    modifier: 2,
                    slideShadows : false
                },
                onSlideChangeStart: function (swiper) {
                    if ($t.closest('.crumina-module').find('.slider-slides').length) {
                        $t.closest('.crumina-module').find('.slider-slides .slide-active').removeClass('slide-active');
                        var realIndex = swiper.slides.eq(swiper.activeIndex).attr('data-swiper-slide-index');
                        $t.closest('.crumina-module').find('.slider-slides .slides-item').eq(realIndex).addClass('slide-active');
                    }
                }
            });
            initIterator++;
        });

        //swiper arrows
        $('.btn-prev').on('click', function () {
            var current_id = $(this).closest('.crumina-module-slider').find('.swiper-container').attr('id');
            swipers['swiper-' + current_id].slidePrev();
        });

        $('.btn-next').on('click', function () {
            var current_id = $(this).closest('.crumina-module-slider').find('.swiper-container').attr('id');
            swipers['swiper-' + current_id].slideNext();
        });

        //swiper tabs

        $('.slider-slides .slides-item').on('click', function (e) {
            e.preventDefault();
            var current_id = $(this).closest('.crumina-module-slider').find('.swiper-container').attr('id');
            if ($(this).hasClass('slide-active')) return false;
            var activeIndex = $(this).parent().find('.slides-item').index(this);
            swipers['swiper-' + current_id].slideTo(activeIndex + 1);
            $(this).parent().find('.slide-active').removeClass('slide-active');
            $(this).addClass('slide-active');

            return false;

        });
    };


    CRUMINA.burgerAnimation = function () {
        /* In animations (to close icon) */

        var beginAC = 80,
            endAC = 320,
            beginB = 80,
            endB = 320;

        function inAC(s) {
            s.draw('80% - 240', '80%', 0.3, {
                delay: 0.1,
                callback: function () {
                    inAC2(s)
                }
            });
        }

        function inAC2(s) {
            s.draw('100% - 545', '100% - 305', 0.6, {
                easing: ease.ease('elastic-out', 1, 0.3)
            });
        }

        function inB(s) {
            s.draw(beginB - 60, endB + 60, 0.1, {
                callback: function () {
                    inB2(s)
                }
            });
        }

        function inB2(s) {
            s.draw(beginB + 120, endB - 120, 0.3, {
                easing: ease.ease('bounce-out', 1, 0.3)
            });
        }

        /* Out animations (to burger icon) */

        function outAC(s) {
            s.draw('90% - 240', '90%', 0.1, {
                easing: ease.ease('elastic-in', 1, 0.3),
                callback: function () {
                    outAC2(s)
                }
            });
        }

        function outAC2(s) {
            s.draw('20% - 240', '20%', 0.3, {
                callback: function () {
                    outAC3(s)
                }
            });
        }

        function outAC3(s) {
            s.draw(beginAC, endAC, 0.7, {
                easing: ease.ease('elastic-out', 1, 0.3)
            });
        }

        function outB(s) {
            s.draw(beginB, endB, 0.7, {
                delay: 0.1,
                easing: ease.ease('elastic-out', 2, 0.4)
            });
        }

        /* Scale functions */

        function addScale(m) {
            m.className = 'menu-icon-wrapper scaled';
        }

        function removeScale(m) {
            m.className = 'menu-icon-wrapper';
        }

        /* Awesome burger scaled */

        var pathD = document.getElementById('pathD'),
            pathE = document.getElementById('pathE'),
            pathF = document.getElementById('pathF'),
            segmentD = new Segment(pathD, beginAC, endAC),
            segmentE = new Segment(pathE, beginB, endB),
            segmentF = new Segment(pathF, beginAC, endAC),
            wrapper2 = document.getElementById('menu-icon-wrapper'),
            trigger2 = document.getElementById('menu-icon-trigger'),
            toCloseIcon2 = true;

        wrapper2.style.visibility = 'visible';

        trigger2.onclick = function () {
            addScale(wrapper2);
            if (toCloseIcon2) {
                inAC(segmentD);
                inB(segmentE);
                inAC(segmentF);
            } else {
                outAC(segmentD);
                outB(segmentE);
                outAC(segmentF);

            }
            toCloseIcon2 = !toCloseIcon2;
            setTimeout(function () {
                removeScale(wrapper2)
            }, 450);
        };
    };





    /* -----------------------------
     * On Click Functions
     * ---------------------------*/


    $window.keydown(function (eventObject) {
        if (eventObject.which == 27) {
            $body.removeClass('overlay-enable');
            $('.search-standard').removeClass('open');
            $primaryMenu.css({'visibility': 'visible'});
            $('#menu-icon-trigger').css({'opacity': '1'});
            $('.top-bar').removeClass('open');
        }
    });

    jQuery(".js-open-login-popup > *").on('click', function () {
        CRUMINA.toggleNav();
        CRUMINA.toggleUserLogin();
        return false;
    });

    jQuery(".js-open-register-popup > *").on('click', function () {
        CRUMINA.toggleNav();
        CRUMINA.toggleUserRegister();
        return false;
    });

    jQuery(".js-open-search-popup > *").on('click', function () {
        CRUMINA.toggleNav();
        CRUMINA.toggleSearch();
        return false;
    });

    jQuery(".overlay_search-close").on('click', function () {
        CRUMINA.toggleNav();
        $body.removeClass('open');
        return false;
    });

    jQuery("#top-bar-js").on('click', function () {
        $('.top-bar').addClass('open');
        return false;
    });

    jQuery(".js-open-search-standard > *").on('click', function () {
        $primaryMenu.find('.search-standard').addClass('open');
        $primaryMenu.css({'visibility': 'hidden'});
        $('#menu-icon-trigger').css({'opacity': '0'});
        setTimeout(function() { $primaryMenu.find('.search-input').focus() }, 100);
        return false;
    });

    jQuery(".js-search-close > *").on('click', function () {
        $primaryMenu.find('.search-standard').removeClass('open');
        $primaryMenu.css({'visibility': 'visible'});
        $('#menu-icon-trigger').css({'opacity': '1'});
        return false;
    });

    jQuery("#top-bar-close-js").on('click', function () {
        $('.top-bar').removeClass('open');
        return false;
    });

    jQuery(".js-open-login-popup").on('click', function () {
        CRUMINA.toggleNav();
        setTimeout(function() {  $('.login-popup').addClass('open'); }, 300);
        return false;
    });

    jQuery(".js-open-register-popup").on('click', function () {
        CRUMINA.toggleNav();
        setTimeout(function() {  $('.register-popup').addClass('open'); }, 300);
        return false;
    });

    jQuery(".js-message-popup").on('click', function () {
        CRUMINA.toggleNav();
        setTimeout(function() {  $('.message-popup').addClass('open'); }, 300);
        return false;
    });

    jQuery(".js-popup-close").on('click', function () {
        CRUMINA.toggleNav();
        setTimeout(function() {  $('.search-popup').removeClass('open'); }, 400);
        setTimeout(function() {  $('.login-popup').removeClass('open'); }, 400);
        setTimeout(function() {  $('.message-popup').removeClass('open'); }, 400);
        setTimeout(function() {  $('.popup-gallery').removeClass('open'); }, 400);
        return false;
    });

    jQuery(".js-popup-clear-input").on('click', function () {
        $(".js-popup-clear-input").siblings("input").val("").focus();
    });


    /*---------------------------------
     ACCORDION
     -----------------------------------*/
    jQuery('.accordion-heading').on('click', function () {
        jQuery(this).parents('.panel-heading').toggleClass('active');
        jQuery(this).parents('.accordion-panel').toggleClass('active');
    });

    //Scroll to top.
    jQuery('.back-to-top').on('click', function () {
        $('html,body').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });


    /* -----------------------------
     * On DOM ready functions
     * ---------------------------*/

    $document.ready(function () {

        jQuery(function(){
            jQuery('.social__item.main').hover(function(){
                jQuery('.social__item.main').siblings('.share-product').addClass('open')
            });
            jQuery('.share-product') .mouseleave(function(){

                jQuery('.share-product').removeClass('open')

            });
        });

        $('.js-pricing-switcher').on('click', function(){
            var $is_year = $(this).prev().is(':checked');
            var $section = $(this).closest('.crumina-pricings');
            var $price = $section.find('.price');
            $price.each(function(){
                if($is_year){
                    $(this).text($(this).data('annually'));
                }else{
                    $(this).text($(this).data('monthly'));
                }
            });
        });


        /*$('.js-typeahead').typeahead({
            input: ".search-input",
            order: "desc",
            source: {
                data: [
                    "63 WordPress", "48 WordPress Plugins", "16 WordPress Theme", "2 WP Mobile App"
                ]
            }
        });*/




        if ($('#menu-icon-wrapper').length) {
            CRUMINA.burgerAnimation();
        }
        // 3-d party libs run
        $primaryMenu.crumegamenu({
            showSpeed: 300,
            hideSpeed: 200,
            trigger: "hover",
            animation: "drop-up",
            indicatorFirstLevel: "&#xf0d7",
            indicatorSecondLevel: "&#xf105"
        });

        CRUMINA.fixedHeader();
        CRUMINA.initSwiper();
        CRUMINA.equalHeight();
        CRUMINA.mediaPopups();
        CRUMINA.IsotopeSort();
        CRUMINA.parallaxFooter();
        CRUMINA.smoothScroll();

        // Dom mofifications
        $('select').niceSelect();
        CRUMINA.Protection();
        CRUMINA.preloader();
        CRUMINA.layerInit();

        CRUMINA.countdown();
        // On Scroll animations.
        CRUMINA.counters();
        CRUMINA.progresBars();
    });

    $(window).on('resize', function(){
        window.requestAnimationFrame( CRUMINA.layerInit);
    });

})(jQuery);




