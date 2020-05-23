$(document).ready(function () {

    if (localStorage.getItem("website_page_scroll") != null) {
        $(window).scrollTop(localStorage.getItem("website_page_scroll"));
    }

    $(window).on("scroll", function() {
        localStorage.setItem("website_page_scroll", $(window).scrollTop());
    });

});