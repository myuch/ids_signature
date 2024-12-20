(function ($) {


	function show_animation_on_modal(){
		for (var i = 0; i < $('#galleryModal .anim_it').length; i++) {
			data_animation = $('#galleryModal .anim_it').eq(i).attr('data-animation');
			data_delay = $('#tab' + tab + ' .anim_it').eq(i).attr('data-delay');
			$('#galleryModal .anim_it').eq(i).css('animation-delay', data_delay + 's');
			$('#galleryModal .anim_it').eq(i).addClass('animate__animated');
			$('#galleryModal .anim_it').eq(i).addClass(data_animation);
		}
	}
	function show_animation_on_tab(tab){
			if (!$('#tab' + tab + ' .anim_it').hasClass('animate__animated')) {
			for (var i = 0; i < $('#tab' + tab + ' .anim_it').length; i++) {
				data_animation = $('#tab' + tab + ' .anim_it').eq(i).attr('data-animation');
				data_delay = $('#tab' + tab + ' .anim_it').eq(i).attr('data-delay');
				$('#tab' + tab + ' .anim_it').eq(i).css('animation-delay', data_delay + 's');
				$('#tab' + tab + ' .anim_it').eq(i).addClass('animate__animated');
				$('#tab' + tab + ' .anim_it').eq(i).addClass(data_animation);
			}
			setTimeout(function() {
				$('#tab' + tab + ' .anim_it_img').addClass('animated_it_img').removeClass('anim_it_img');
			}, 600);
			//console.log( 'show anim done' + tab);
		}
	}

	function hide_animation_on_tab(tab){
		if (tab != 1) {
			if ($('#tab' + tab + ' .anim_it').hasClass('animate__animated')) {
				for (var i = 0; i < $('#tab' + tab + ' .anim_it').length; i++) {
					data_animation = $('#tab' + tab + ' .anim_it').eq(i).attr('data-animation');
					data_delay = $('#tab' + tab + ' .anim_it').eq(i).attr('data-delay');
					$('#tab' + tab + ' .anim_it').eq(i).css('animation-delay', data_delay + 's');
					$('#tab' + tab + ' .anim_it').eq(i).removeClass('animate__animated');
					$('#tab' + tab + ' .anim_it').eq(i).removeClass(data_animation);
				}
				$('#tab' + tab + ' .animated_it_img').removeClass('animated_it_img').addClass('anim_it_img');
			}
		}
	}


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
			$('#galleryModal .slider-nav-thumbnails').html($(this).find('.slider_imgs').html());
      $('#galleryModal .galleryModal-title').html($(this).attr('data-term-name'));
			$('#galleryModal .slider-nav-thumbnails .galleryModal_slider_item').removeClass('galleryModal_slider_item').addClass('slider-nav-thumbnails-item');
      $('#galleryModal .galleryModal-subtitle').html($(this).attr('data-title'));
      $('#galleryModal .galleryModal-desc').html($(this).attr('data-description'));
			$('#galleryModal').css('opacity', 0);
      $('#galleryModal').show();
			$('.galleryModal_slider').css('opacity', 0);
			window.slick_gallery_init();
			$('#projects_popup_anim img').attr('src', $(this).find('.main_img').attr('src'));
			$('#projects_popup_anim').css('left', $(this).offset().left);
			$('#projects_popup_anim').css('top', $(this).offset().top);
			$('#projects_popup_anim').css('width', $(this).width());
			$('#projects_popup_anim').css('height', $(this).find('.main_img').height());
			$('#projects_popup_anim').attr('origin_left', $(this).offset().left);
			$('#projects_popup_anim').attr('origin_top', $(this).offset().top);
			$('#projects_popup_anim').attr('origin_width', $(this).width());
			$('#projects_popup_anim').attr('origin_height', $(this).find('.main_img').height());
			$('.projects_popup_anim_wrapper').show();
			$('#projects_popup_anim').show();
			$(this).addClass('opened');
			$(this).find('.figure_wrapper').css('opacity', 0);

			an_margin_left = ($('.galleryModal_slider .galleryModal_slider_item').outerWidth(true) - $('.galleryModal_slider .galleryModal_slider_item').outerWidth())/2;

			an_left = $('.galleryModal_slider').offset().left + an_margin_left;
			an_top = $('.galleryModal_slider').offset().top;
			an_width = $('.galleryModal_slider').width() - an_margin_left - an_margin_left;
			an_height = $('.galleryModal_slider .galleryModal_slider_item img').height();
			$('#projects_popup_anim').animate({
	      width: an_width,
				height: an_height,
				left: an_left,
				top: an_top,
	    }, 500, "linear", function(){
	      $('.galleryModal_slider').css('opacity', 1);
				$('#projects_popup_anim').hide();
				$('.projects_popup_anim_wrapper').hide();
				show_animation_on_modal();
	    });
			$('#galleryModal').animate({
	      opacity: 1,
	    }, 500, "linear");

    });

		$('#hamburger-close-white').on('click', function () {
			$('#projects_popup_anim img:last-child').css('opacity', 1);
			$('#projects_popup_anim img:last-child').attr('src', $('.galleryModal_slider .galleryModal_slider_item.slick-active img').attr('src'));
			$('.projects_popup_anim_wrapper').show();
			$('#projects_popup_anim').show();
			$('.galleryModal_slider').css('opacity', 0);
			$('#projects_popup_anim img:last-child').animate({
				opacity: 0,
	    }, 500, "linear");
			$('#projects_popup_anim').animate({
				width: $('#projects_popup_anim').attr('origin_width'),
				height: $('#projects_popup_anim').attr('origin_height'),
				left: $('#projects_popup_anim').attr('origin_left'),
				top: $('#projects_popup_anim').attr('origin_top'),
	    }, 500, "linear", function(){
	      //$('.galleryModal_slider').css('opacity', 1);

				$('.project_item.opened').find('.figure_wrapper').css('opacity', 1);
				$('.project_item.opened').removeClass('opened');
				$('#projects_popup_anim').hide();
				$('.projects_popup_anim_wrapper').hide();

				//show_animation_on_modal();
	    });

			$('#galleryModal').animate({
	      opacity: 0,
	    }, 500, "linear", function(){
	      $('#galleryModal').hide();
	    });
    });
		if ("ontouchstart" in document.documentElement) {
			$('#tab5 .project_item').addClass('touch');
		}
	});

	$(window).on('load', function (e) {
		height = 0;
		for (var i = 2; i <= 5; i++) {
			//console.log($('#tab' + i + ' .container').height());
			if (height <= $('#tab' + i + ' .container').height()) {
				height = $('#tab' + i + ' .container').height();
			}
		}
		for (var i = 2; i <= 5; i++) {
			$('#tab' + i + ' .container').css('height', height);
		}

		new fullpage('#myContainer', {
			// sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
			anchors: ['ids', 'secondPage', '3rdPage', '4thpage'],
			menu: '#menu',
			slidesNavigation: false,
			controlArrows: false,
			scrollOverflow: true,
			scrollingSpeed: 1200,
			normalScrollElements: '.modalMenu, select, .projects_list2, .galleryModal, #tab5_scroll',//, .move_items.slick-initialized',
			//In addition to the extension license you'll
			//need to acquire a fullPage.js license from https://goo.gl/5x9a22
			licenseKey: '390281F7-78A54E36-A4D1D692-7A439190',

			scrollHorizontally: true,
			continuousHorizontal: true,
			loopHorizontal: false,
			scrollHorizontallyKey: 'aWRzc2lnbmF0dXJlLmNvbV9oMWxjMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDVwZkk=', //see https://goo.gl/xkUmHS


			afterSlideLoad: function (section, origin, destination, direction) {
				//$('div[style^="z-index:99"]').hide();

				// if (destination.index == 4) {
				// }
				if (destination.index == 5) {

					//$('.slides_nav').hide();
					$('.modalMenu_menu span.active').removeClass('active');
					$('.modalMenu_menu span[data-index="' + destination.index + '"]').addClass('active');
				} else {
					//$('.slides_nav').show();
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
				hide_animation_on_tab(tab_last);
				show_animation_on_tab(tab);
				// fullpage_api.setAutoScrolling(true);
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
				if (tab == 5) {
					fullpage_api.reBuild();
				}
				show_animation_on_tab(tab);

			},
			afterRender: function(){

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
		show_animation_on_tab(1);
		$('#tab5 .empty_height').height($('#tab5 .projects_list').width() + $(window).height());// + $(window).height() - $('#tab5 .container').width());// + $(window).height());// - $('#tab5 .container').width());
		fullpage_api.reBuild();
		jQuery('.project_item_info').each(function( index ) {
			var term_item_width = jQuery(this).closest('.project_term_item').width();
			jQuery(this).attr('data_margin_max', term_item_width - jQuery(this).width());
			jQuery(this).attr('data_margin_min', 0);
		});
		var mt_tab5 = (jQuery(window).height() - jQuery('#tab5 .container').height())/2;
		//jQuery('#tab5 .container').css('marginTop',  mt_tab5);
		jQuery('#tab5 .container').css('marginTop',  jQuery('#tab4 .container').offset().top);
		jQuery('#tab6 .container').css('marginTop',  jQuery('#tab4 .container').offset().top);

		fullpage_api.setAllowScrolling(false, 'left, right');
		fullpage_api.reBuild();
		$('body').css('opacity', 1);
	});


})(jQuery);
	last_scroll = 0;
	last_delta = 0;
	delta = 0;
	delta_last_change = 0;
function scroll_fixed_tab(x,y,this_tab){
	//console.log('scroll_fixed_tab');

	//console.log(this_tab);
	if (jQuery('#tab5').hasClass('active') || jQuery('#tab6').hasClass('active')) {
		if (((Date.now() - delta_last_change) >= 100) || Math.abs(last_delta) <= Math.abs(delta) - 5) {
			fullpage_api.setAutoScrolling(true);
		} else {
			fullpage_api.setAutoScrolling(false);
		}
	} else {
		fullpage_api.setAutoScrolling(true);
	}

	if (jQuery('#tab5').hasClass('active')) {
		//fullpage_api.setAutoScrolling(false);
		// console.log( delta + ', ' + last_delta);
		// delta_change = Math.abs(delta - last_delta);
		// if ((Date.now() - last_scroll) <= 100) {
		//
		// } else {
		//
		// }

		if ($('#tab5 .empty_height').height() == this_tab.scrollerHeight) {
			jQuery('#tab5 .container').css('top', y*-1);
			pos_y = y;
			percents_scrolled = (pos_y * -1)/($('#tab5 .empty_height').height() - $(window).height());
			percents = pos_y + (percents_scrolled * $('#tab5 .container').width());
			jQuery('#tab5 .container .projects_list').css('-webkit-transform', 'translateX(' + percents + 'px)');


			jQuery('.project_item_info').each(function( index ) {
				// var term_item_offset = jQuery(this).closest('.project_term_item').offset().left;
				// var term_item_width = jQuery(this).closest('.project_term_item').width();
				// var container_offset_left = jQuery('#tab5 .container .left_section').offset().left;
				// current_margin = jQuery(this).outerWidth(true) - jQuery(this).width();
				// var set_margin = (term_item_offset - container_offset_left) * -1;
				// if (set_margin >= jQuery(this).attr('data_margin_max')) {
				// 	//console.log('set is bigger');
				// 	set_margin = jQuery(this).attr('data_margin_max');
				// }
				// if (set_margin <= 0) {
				// 	set_margin = 0;
				// }
				// set_margin = Number(set_margin);
				// jQuery(this).css('marginLeft', set_margin);
			});
		}
		last_scroll = Date.now();
	}
}

window.addEventListener("wheel", event => {
		last_delta = delta;
		delta_last_change = Date.now();
		delta = event.deltaY;
		//console.log( delta + ', ' + last_delta);
    //console.info(event.deltaY);
});
