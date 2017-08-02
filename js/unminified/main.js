jQuery(function($) {
    var preloader = $(".preloader");
    $(window).load(function() { preloader.remove() });
    var slideHeight = $(window).height();
    $("#home-slider .item").css("height", slideHeight);
    $(window).resize(function() {
        "use strict",
        $("#home-slider .item").css("height", slideHeight)
    });
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > slideHeight) { $(".main-nav").addClass("navbar-fixed-top") } else { $(".main-nav").removeClass("navbar-fixed-top") } });
    $(window).scroll(function(event) { Scroll() });
    $(".navbar-collapse ul li a").on("click", function() {
        $("html, body").animate({ scrollTop: $(this.hash).offset().top - 5 }, 1000);
        return false
    });

    function Scroll() {
        var contentTop = [];
        var contentBottom = [];
        var winTop = $(window).scrollTop();
        var rangeTop = 200;
        var rangeBottom = 500;
        $(".navbar-collapse").find(".scroll a").each(function() {
            contentTop.push($($(this).attr("href")).offset().top);
            contentBottom.push($($(this).attr("href")).offset().top + $($(this).attr("href")).height())
        });
        $.each(contentTop, function(i) {
            if (winTop > contentTop[i] - rangeTop) { $(".navbar-collapse li.scroll").removeClass("active").eq(i).addClass("active") } })
    }
    $("#tohash").on("click", function() {
        $("html, body").animate({ scrollTop: $(this.hash).offset().top - 5 }, 1000);
        return false
    });
    new WOW().init();
    smoothScroll.init();
    $("#about-us").bind("inview", function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($("div.progress-bar"), function() { $(this).css("width", $(this).attr("aria-valuetransitiongoal") + "%") });
            $(this).unbind("inview")
        }
    });
    $("#features").bind("inview", function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find(".timer").each(function() {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: "swing",
                    step: function() {
                        $this.text(Math.ceil(this.Counter))
                    }
                })
            });
            $(this).unbind("inview")
        }
    });
    $("#portfolio").on("click", ".folio-read-more", function(event) {
        event.preventDefault();
        var link = $(this).data("single_url");
        var full_url = "#portfolio-single-wrap",
            parts = full_url.split("#"),
            trgt = parts[1],
            target_top = $("#" + trgt).offset().top;
        $("html, body").animate({ scrollTop: target_top }, 600);
        $("#portfolio-single").slideUp(500, function() { $(this).load(link, function() { $(this).slideDown(500) }) })
    });
    $("#portfolio-single-wrap").on("click", ".close-folio-item", function(event) {
        event.preventDefault();
        var full_url = "#portfolio",
            parts = full_url.split("#"),
            trgt = parts[1],
            target_offset = $("#" + trgt).offset(),
            target_top = target_offset.top;
        $("html, body").animate({ scrollTop: target_top }, 600);
        $("#portfolio-single").slideUp(500)
    });
    var form = $("#main-contact-form");
    form.submit(function(event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr("action"),
            beforeSend: function() {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn())
            }
        }).done(function(data) { form_status.html('<p class="text-success">Thank you for contact us. We will get back to you ASAP.</p>').delay(3000).fadeOut() })
    });
    var latitude = $("#google-map").data("latitude");
    var longitude = $("#google-map").data("longitude");

    function initialize_map() {
        var myLatlng = new google.maps.LatLng(latitude, longitude);
        var mapOptions = { zoom: 14, scrollwheel: false, center: myLatlng };
        var map = new google.maps.Map(document.getElementById("google-map"), mapOptions);
        var contentString = "";
        var infowindow = new google.maps.InfoWindow({ content: '<div class="map-content"><ul class="address">' + $(".address").html() + "</ul></div>" });
        var marker = new google.maps.Marker({ position: myLatlng, map: map });
        google.maps.event.addListener(marker, "click", function() { infowindow.open(map, marker) })
    }
    google.maps.event.addDomListener(window, "load", initialize_map)
});
(function() {
    var support = { animations: Modernizr.cssanimations },
        container = document.getElementById("ip-container"),
        header = container.querySelector("header.ip-header"),
        loader = new PathLoader(document.getElementById("ip-loader-circle")),
        animEndEventNames = { WebkitAnimation: "webkitAnimationEnd", OAnimation: "oAnimationEnd", msAnimation: "MSAnimationEnd", animation: "animationend" },
        animEndEventName = animEndEventNames[Modernizr.prefixed("animation")];

    function init() {
        var onEndInitialAnimation = function() {
            if (support.animations) { this.removeEventListener(animEndEventName, onEndInitialAnimation) }
            startLoading() };
        classie.add(container, "loading");
        if (support.animations) {
            container.addEventListener(animEndEventName, onEndInitialAnimation)
        } else { onEndInitialAnimation() }
    }

    function startLoading() {
        var simulationFn = function(instance) {
            var progress = 0,
                interval = setInterval(function() {
                    progress = Math.min(progress + Math.random() * 0.1, 1);
                    instance.setProgress(progress);
                    if (progress === 1) {
                        classie.remove(container, "loading");
                        classie.add(container, "loaded");
                        clearInterval(interval);
                        var onEndHeaderAnimation = function(ev) {
                            if (support.animations) {
                                if (ev.target !== header) {
                                    return }
                                this.removeEventListener(animEndEventName, onEndHeaderAnimation) }
                            classie.add(document.body, "layout-switch") };
                        if (support.animations) {
                            header.addEventListener(animEndEventName, onEndHeaderAnimation)
                        } else { onEndHeaderAnimation() }
                    }
                }, 80)
        };
        loader.setProgressFn(simulationFn)
    }
    init()
})();
