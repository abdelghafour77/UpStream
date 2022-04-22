 // Slick Slider - Main Slider

 $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    arrows: true,
    fade: true,
    adaptiveHeight: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    nextArrow: '<i class="next-arrow fas fa-chevron-right"></i>',
    prevArrow: '<i class="prev-arrow fas fa-chevron-left"></i>',
});

$('.main-slider').slickAnimation();


// Owl Slider - Trending Slider

$('#pupular-slider').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: true,
    items: 7,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }


    }
});