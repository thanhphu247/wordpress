jQuery(function($) {
    window.onload = function() {
        $('.slider--our--client').slick({
            // autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
            // prevArrow: '',
            // nextArrow: '',
            // centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    };
});