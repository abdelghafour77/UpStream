/* Table of Content
==================================================
1.    Page Loader
2.    Mobile Navigation
3.    Fixed Header
4.    Search Pop-up
5.    Slick Slider - Main Slider
6.    Owl Slider - Trending Slider
7.    Number Counters
8.    Bootstrap Datepicker
9.    To Top Button
10.   Swiper Slider - Movies and Single Pages
*/

jQuery(function ($) {
    "use strict";

    // Page Loader

    $(document).ready(function () {
        setTimeout(function () {
            $('body').addClass('loaded');
        });
    });


    // Mobile Navigation

    $('.navbar-nav .menu-dropdown').on('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).siblings().slideToggle();
    });


    // Fixed Header

    $(window).on('scroll', function () {

        /**Fixed header**/
        if ($(window).scrollTop() > 250) {
            $('.is-sticky').addClass('sticky fade_down_effect');
        } else {
            $('.is-sticky').removeClass('sticky fade_down_effect');
        }
    });


    // Search Pop-up

    // if ($('.modal-popup').length > 0) {
    //     $('.modal-popup').magnificPopup({
    //         type: 'inline',
    //         fixedContentPos: false,
    //         fixedBgPos: true,
    //         overflowY: 'auto',
    //         closeBtnInside: false,
    //         callbacks: {
    //             beforeOpen: function beforeOpen() {
    //                 this.st.mainClass = "my-mfp-slide-bottom promo-popup";
    //             }
    //         }
    //     });
    // }
    $(function() {
        $('a[href="#search"]').on('click', function(event) {
          event.preventDefault();
          $('#search').addClass('open');
          $('#search > form > input[type="search"]').focus();
        });
  
        $('#search, #search button.close').on('click keyup', function(event) {
          if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
          }
        });

      });


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


    // Number Counters




    // Bootstrap Datepicker
    $('#sandbox-container input').datepicker({});



    // To Top Button

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });


    // scroll body to 0px on click

    $('.back-to-top').on('click', function () {
        $('.back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('.back-to-top').tooltip('hide');

});

var swiper = new Swiper(".swiper-slider", {
    slidesPerView: 1,
    effect: "fade",
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});