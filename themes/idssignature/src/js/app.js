jQuery(document).ready(function ($) {

    $('#hamburger').on('click', function(){
        $('.modalMenu').fadeIn();

        if($(window).width() <= 991){
            $('#hamburger').hide();
            $('#hamburger-close').show();
        }
    });

    $('.modalMenu_menu span').on('click', function(){
        $('.modalMenu').hide();
        $('#hamburger').show();
        $('#hamburger-close').hide();
    });

    $('#hamburger-close').on('click', function(){
        $(this).hide();
        $('#hamburger').show();
        $('.modalMenu').fadeOut();
    });

    $('.modalMenu-close').on('click', function(){
        $('.modalMenu').fadeOut();
    });


    $('.galleryModal_slider_wrap').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: $('#galleryModal_arrowPrev'),
        nextArrow: $('#galleryModal_arrowNext'),
    });

    $('.slider-nav-thumbnails').slick({
        slidesToShow: slideCount,
        slidesToScroll: 1,
        asNavFor: '.galleryModal_slider_wrap',
        dots: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '0px',
    });

    // Remove active class from all thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

    // Set active class to first thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

    // On before slide change match active thumbnail to current slide
    $('.galleryModal_slider_wrap').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.slider-nav-thumbnails-item').removeClass('slick-active');
        $('.slider-nav-thumbnails-item').eq(mySlideNumber).addClass('slick-active');
   });

   $('.slider-nav-thumbnails-item').on('click', function(){
        $('.slider-nav-thumbnails-item').removeClass('slick-active');
        $(this).addClass('slick-active');
   });



});
