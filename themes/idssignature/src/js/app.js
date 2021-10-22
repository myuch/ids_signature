jQuery(document).ready(function ($) {

    $('#hamburger').on('click', function () {
        $('.modalMenu').fadeIn();

        if ($(window).width() <= 1199) {
            $('#hamburger').hide();
            $('#hamburger-close').show();
        }
    });

    $('.modalMenu_menu span').on('click', function () {
        $('.modalMenu').fadeOut();
        $('#hamburger').show();
        $('#hamburger-close').hide();
    });

    $('#hamburger-close').on('click', function () {
        $(this).hide();
        $('#hamburger').show();
        $('.modalMenu').fadeOut();
    });

    $('.modalMenu-close').on('click', function () {
        $('.modalMenu').fadeOut();
    });


    if ($(window).width() > 992) {
        $(document).click(function (event) {
            if (!$(event.target).closest(".modalMenu, #hamburger").length) {
                $("body").find(".modalMenu").fadeOut();
            }
        });
    }

    $('#hamburger-close-white').on('click', function () {
        $('#galleryModal').hide();
    });

    slick_gallery_init();

});

function slick_gallery_init() {

    var $status = $('.galleryModal_slider_count');
    var $slickElement = $('.galleryModal_slider_wrap');

    $slickElement.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: $('#galleryModal_arrowPrev'),
        nextArrow: $('#galleryModal_arrowNext'),
    });

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + ' / ' + slick.slideCount);
    });

}

function slick_gallery_unslick() {
    $('.galleryModal_slider_wrap').slick('unslick');
    $('.slider-nav-thumbnails').slick('unslick');
}
window.slick_gallery_init = slick_gallery_init;
window.slick_gallery_unslick = slick_gallery_unslick;