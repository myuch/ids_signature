(function($) {

  $(document).ready(function(e){

    $('.collapse_btn').on('click', function(e){
      if($(this).hasClass('active')) {
        var newHeight = $('#tab4 .container').height() - 178;
        $('#tab4 .left_section').animate({
          height: newHeight
        }, 300);
        $('#tab4 .right_section').animate({
          marginTop: '-128px',
          opacity: 1
        }, 300);
        $('.collapse_btn').animate({
          top: newHeight
        }, 300);
        $('.collapse_btn img').removeClass('active');
        $('#tab4 .container .collapse_btn .title').html('Read More')
        $('#tab4 .container .collapse_btn').removeClass('active');
      } else {
        var newHeight = $('#tab4 .container').height() - 50;
        $('#tab4 .left_section').animate({
          height: newHeight
        }, 300);
        $('#tab4 .right_section').animate({
          marginTop: 0,
          opacity: 0
        }, 300);
        $('.collapse_btn').animate({
          top: newHeight
        }, 300);
        $('.collapse_btn img').addClass('active');
        $('#tab4 .container .collapse_btn .title').html('Read Less')
        $('#tab4 .container .collapse_btn').addClass('active');
      }
    });
  });

  $(window).on('load', function(e){

    new fullpage('#myContainer', {
        // sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
        anchors: ['ids', 'secondPage', '3rdPage', '4thpage'],
        menu: '#menu',
        slidesNavigation: false,
        controlArrows: false,
        scrollOverflow: true,

        //In addition to the extension license you'll
        //need to acquire a fullPage.js license from https://goo.gl/5x9a22
        licenseKey: 'INSERT YOUR FULLPAGE LICENSE KEY HERE',

        scrollHorizontally: true,
        continuousHorizontal: false,
        loopHorizontal: false,
        scrollHorizontallyKey: 'INSERT YOUR EXTENSION KEY HERE', //see https://goo.gl/xkUmHS

        afterSlideLoad: function( section, origin, destination, direction){
          if (destination.index == 5) {
            $('.slides_nav').hide();
            $('.modalMenu_menu span.active').removeClass('active');
            $('.modalMenu_menu span[data-index="' + destination.index + '"]').addClass('active');
          } else {
            $('.slides_nav').show();
            $('.slides_nav .lines .line_item.active').removeClass('active');
            $('.slides_nav .lines .line_item[data-index="' + destination.index + '"]').addClass('active');
            $('.slides_nav .lines_title_mobile').html($('.slides_nav .lines .line_item.active .title').html());

            $('.modalMenu_menu span.active').removeClass('active');
            $('.modalMenu_menu span[data-index="' + destination.index + '"]').addClass('active');
          }

          if (destination.index == 0) {
            $('.header').removeClass('active');
          }else if(destination.index == 5){
            $('.header').addClass('lastSection');
            $('.header').removeClass('active');
          }else{
            $('.header').addClass('active');
            $('.header').removeClass('lastSection');
          }

      	}
    });

    $('#tab1').addClass('loaded');
    $('.slide_bg').addClass('active');

    if (window.matchMedia("(max-width: 600px)").matches) {
      /* the viewport is less than 600 pixels wide */
      $('.move_items').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.slick_arrow_prev'),
        nextArrow: $('.slick_arrow_next')
      });
    }

  });

})(jQuery);
