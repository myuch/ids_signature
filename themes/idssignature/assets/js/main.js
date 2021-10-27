(function ($) {

	$(document).ready(function (e) {

		$('.collapse_btn').on('click', function (e) {
			if ($(this).hasClass('active')) {
				var newHeight = $('#tab4 .container').height() - 278;
				$('#tab4 .left_section').animate({
					height: newHeight
				}, 300);
				$('#tab4 .right_section').animate({
					marginTop: '-228px',
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
			$('#tab5 .left_section_content p.active').removeClass('active');
			$('#tab5 .left_section_content p[descr-data-id="' + this.value + '"]').addClass('active');
      fullpage_api.reBuild();

    });
    $('.project_item').on('click', function(){
      window.slick_gallery_unslick();
      $('#galleryModal .galleryModal_slider_wrap').html($(this).find('.slider_imgs').html());

			//$('#galleryModal .galleryModal_slider_wrap').html(html);
			$('#galleryModal .slider-nav-thumbnails').html($(this).find('.slider_imgs').html());
      $('#galleryModal .galleryModal-title').html($(this).attr('data-term-name'));
			$('#galleryModal .slider-nav-thumbnails .galleryModal_slider_item').removeClass('galleryModal_slider_item').addClass('slider-nav-thumbnails-item');
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
			scrollingSpeed: 700,
			normalScrollElements: '.modalMenu, select, .projects_list, .galleryModal',//, .move_items.slick-initialized',
			//In addition to the extension license you'll
			//need to acquire a fullPage.js license from https://goo.gl/5x9a22
			licenseKey: '390281F7-78A54E36-A4D1D692-7A439190',

			scrollHorizontally: true,
			continuousHorizontal: false,
			loopHorizontal: false,
			scrollHorizontallyKey: 'aWRzc2lnbmF0dXJlLmNvbV9oMWxjMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDVwZkk=', //see https://goo.gl/xkUmHS

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
				if (destination.index == 0) {
					$('.header').removeClass('active');
					$('.header').removeClass('lastSection');
				} else if (destination.index == 5) {
					$('.header').addClass('lastSection');
					$('.header').removeClass('active');
				} else {
					$('.header').addClass('active');
					$('.header').removeClass('lastSection');
				}

				tab_last = origin.index+1;
				tab = destination.index+1;
				$('#tab' + tab_last + ' .anim_it').removeClass('animate__animated').removeClass('animate__fadeInUp');
				$('#tab' + tab_last + ' .anim_it_head').removeClass('animate__animated').removeClass('animate__fadeInLeft');
				//$('#tab' + origin.index + ' .anim_it').removeClass('animate__animated animate__fadeInUp');
				if (!$('#tab' + tab + ' .anim_it').hasClass('animate__animated')) {
					$('#tab' + tab + ' .anim_it').addClass('animate__animated').addClass('animate__fadeInUp');
					$('#tab' + tab + ' .anim_it_head').addClass('animate__animated').addClass('animate__fadeInLeft');
				}
			},
			onSlideLeave: function(section, origin, destination, direction){
				if (destination.index == 0) {
					$('.header').removeClass('active');
					$('.header').removeClass('lastSection');
				} else if (destination.index == 5) {
					$('.header').addClass('lastSection');
					$('.header').removeClass('active');
				} else {
					$('.header').addClass('active');
					$('.header').removeClass('lastSection');
				}

				tab = destination.index+1;
				$('#tab' + tab + ' .anim_it').removeClass('animate__animated').removeClass('animate__fadeInUp');
				$('#tab' + tab + ' .anim_it').addClass('animate__animated').addClass('animate__fadeInUp');
				$('#tab' + tab + ' .anim_it_head').removeClass('animate__animated').removeClass('animate__fadeInLeft');
				$('#tab' + tab + ' .anim_it_head').addClass('animate__animated').addClass('animate__fadeInLeft');
				delay = 0;
				for (var i = 1; i < $('#tab' + tab + ' .anim_it').length; i++) {
					delay = delay + 0.3;
					$('#tab' + tab + ' .anim_it').eq(i).css('animation-delay', delay + 's');
				}

			},


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
			var newHeight = $('#tab4 .container').height() - 178 - 145;
		}
		$('.slider_tab_4').slick({
			infinite: true,
			autoplay: true,
			fade:true,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			speed: 3000,
			autoplaySpeed: 3000,
		});
		$('.slider_tab_4').on('init', function(event, slick){
		   fullpage_api.reBuild();
		});

		height = 0;
		for (var i = 2; i <= 5; i++) {
			console.log($('#tab' + i + ' .container').height());
			if (height <= $('#tab' + i + ' .container').height()) {
				height = $('#tab' + i + ' .container').height();
			}
		}
		for (var i = 2; i <= 5; i++) {
			$('#tab' + i + ' .container').css('height', height);
		}

		// AOS.init();
		// var $isAnimatedSecond = $('#tab1 .anim_it');
    // $isAnimatedSecond.addClass('animate__animated animate__fadeInUp');
    // $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
    // $isAnimatedSecond.eq(1).css('animation-delay', '.6s');
    // $isAnimatedSecond.eq(2).css('animation-delay', '.9s');
		$('body').css('opacity', 1);

	});

})(jQuery);
