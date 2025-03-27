$(document).ready(function(){
    $('.news-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        prevArrow: '<button class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});