(function ($) {

	$(document).ready(function (e) {

		$('.collapse_btn').on('click', function (e) {
			if ($(this).hasClass('active')) {
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

		$('select[name="tab5_select"]').on('change', function() {
      $('.project_term_item').hide();
      $('.project_term_item[data-term="' + this.value + '"]').show();
      fullpage_api.reBuild();

    });
    $('.project_item').on('click', function(){
      window.slick_gallery_unslick();
      $('#galleryModal .galleryModal_slider_wrap').html($(this).find('.slider_imgs').html());
      $('#galleryModal .galleryModal-title').html($(this).attr('data-term-name'));
      $('#galleryModal .galleryModal-subtitle').html($(this).attr('data-title'));
      $('#galleryModal .galleryModal-desc').html($(this).attr('data-description'));
      $('#galleryModal').show();
      window.slick_gallery_init();
    });
	});

	$(window).on('load', function (e) {
		//$('div[style^="z-index:99"]').hide();
		new fullpage('#myContainer', {
			// sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
			anchors: ['ids', 'secondPage', '3rdPage', '4thpage'],
			menu: '#menu',
			slidesNavigation: false,
			controlArrows: false,
			scrollOverflow: true,
			normalScrollElements: '.modalMenu',
			//In addition to the extension license you'll
			//need to acquire a fullPage.js license from https://goo.gl/5x9a22
			licenseKey: '390281F7-78A54E36-A4D1D692-7A439190',

			scrollHorizontally: true,
			continuousHorizontal: false,
			loopHorizontal: false,
			scrollHorizontallyKey: 'I628280F8-F3B74673-8F399A08-E98D29B3', //see https://goo.gl/xkUmHS

			afterSlideLoad: function (section, origin, destination, direction) {
				//$('div[style^="z-index:99"]').hide();
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
			},
			onSlideLeave: function(section, origin, destination, direction){
				if (destination.index == 0) {
					$('.header').removeClass('active');
				} else if (destination.index == 5) {
					$('.header').addClass('lastSection');
					$('.header').removeClass('active');
				} else {
					$('.header').addClass('active');
					$('.header').removeClass('lastSection');
				}
			},

		});

		//$('div[style^="z-index:99"]').hide();
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
			// $('.modalMenu').animate({
			//   height: 500
			// }, 0);
			var newHeight = $('#tab4 .container').height() - 178 - 145;
			// $('#tab4 .left_section').animate({
			//   height: newHeight
			// }, 0);

		}


	});

})(jQuery);
