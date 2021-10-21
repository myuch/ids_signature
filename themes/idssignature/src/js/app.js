jQuery(document).ready(function ($) {

    $('#hamburger').on('click', function () {
        $('.modalMenu').fadeIn();

        if ($(window).width() <= 991) {
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

function slick_gallery_init(){
  var slideCount = $('#galleryModal .galleryModal_slider_item').length;

  $('.galleryModal_slider_wrap').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      prevArrow: $('#galleryModal_arrowPrev'),
      nextArrow: $('#galleryModal_arrowNext'),
  });
  console.log(slideCount);
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
}
function slick_gallery_unslick() {
  $('.galleryModal_slider_wrap').slick('unslick');
  $('.slider-nav-thumbnails').slick('unslick');
}
window.slick_gallery_init = slick_gallery_init;
window.slick_gallery_unslick = slick_gallery_unslick;
