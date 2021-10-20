(function($) {

  $(document).ready(function(e){


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
          } else {
            $('.slides_nav').show();
            $('.slides_nav .lines .line_item.active').removeClass('active');
            $('.slides_nav .lines .line_item[data-index="' + destination.index + '"]').addClass('active');
            $('.slides_nav .lines_title_mobile').html($('.slides_nav .lines .line_item.active .title').html());
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
