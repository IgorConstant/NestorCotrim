jQuery(document).ready(function ($) {

    $('#slider-nav').owlCarousel({
        stagePadding: 380,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        //autoplay: true,
        //autoplayTimeout: 8000,
        //autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            600: {
                items: 1,
                stagePadding: 0
            },
            1280: {
                items: 1,
                stagePadding: 200
            },
            1920: {
                items: 1,
                stagePadding: 380
            }
        }
    });
});