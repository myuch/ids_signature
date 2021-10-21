<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IDSsignature
 */
// if(!$_GET['lengin']) {
// 	exit();
// }
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

	<!-- Header -->
	<header class="header">
		<div class="header_wrap">
			<img class="logo-light" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-light.png" >
			<img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
			<div class="header_right">
				<a onclick="fullpage_api.moveTo('ids', 5);" href="#" class="contactUs">
					CONTACT US
				</a>
				<div class="hamburger">
					<svg id="hamburger" xmlns="http://www.w3.org/2000/svg" width="35" height="22" viewBox="0 0 35 22">
						<g>
							<g>
								<path fill="#fff" d="M1 0h33a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2zm0 10h33a1 1 0 1 1 0 2H1a1 1 0 0 1 0-2zm0 10h33a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2z" />
							</g>
						</g>
					</svg>
					<svg id="hamburger-close" xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26">
						<g>
							<g>
								<path d="M2.533.6L13.5 11.568 24.467.601a1 1 0 1 1 1.414 1.413L14.914 12.981l10.954 10.955a1 1 0 1 1-1.414 1.413L13.5 14.395 2.546 25.349a1 1 0 1 1-1.414-1.413L12.086 12.98 1.12 2.014A1 1 0 1 1 2.533.601z" />
							</g>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="modalMenu">

		<svg class="modalMenu-close" xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26">
			<g>
				<g>
					<path d="M2.533.6L13.5 11.568 24.467.601a1 1 0 1 1 1.414 1.413L14.914 12.981l10.954 10.955a1 1 0 1 1-1.414 1.413L13.5 14.395 2.546 25.349a1 1 0 1 1-1.414-1.413L12.086 12.98 1.12 2.014A1 1 0 1 1 2.533.601z" />
				</g>
			</g>
		</svg>

		<div class="modalMenu_wrap">

			<div class="modalMenu_menu">
				<span class="active" onclick="fullpage_api.moveTo('ids', 0);" data-index="0">Welcome</span>
				<span onclick="fullpage_api.moveTo('ids', 1);" data-index="1">About IDS Signature</span>
				<span onclick="fullpage_api.moveTo('ids', 2);" data-index="2">Signature Moves</span>
				<span onclick="fullpage_api.moveTo('ids', 3);" data-index="3">Where We Imagine</span>
				<span onclick="fullpage_api.moveTo('ids', 4);" data-index="4">What We’ve imagined</span>
				<span onclick="fullpage_api.moveTo('ids', 5);" data-index="5">Book A Consultation</span>
			</div>

			<div class="modalMenu_contacts">
				<a href="tel:+18888844102">1 888-884-4102</a>
				<a href="mailto:info@idssignature.com">info@idssignature.com</a>
			</div>

			<div class="modalMenu_socials">
				<a href="https://www.facebook.com/imaginationdesignstudios" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook.png">
				</a>
				<a href="https://www.instagram.com/idskids/" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Instagram.png">
				</a>
				<a href="https://www.linkedin.com/company/imagination-design-studios/" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/LinkedIn.png">
				</a>
				<a href="https://www.pinterest.com/idspins/_created/" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Pinterest.png">
				</a>
				<a href="https://www.youtube.com/user/ImaginationDental" target="_blank">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<path d="M25,49.61C11.43,49.61,0.39,38.57,0.39,25C0.39,11.43,11.43,0.39,25,0.39S49.61,11.43,49.61,25
								C49.61,38.57,38.57,49.61,25,49.61z M25,2.15C12.4,2.15,2.15,12.4,2.15,25C2.15,37.6,12.4,47.85,25,47.85
								c12.6,0,22.85-10.25,22.85-22.85C47.85,12.4,37.6,2.15,25,2.15z"/>
							<path d="M33.47,15.81H16.53c-2.27,0-4.12,1.75-4.12,3.89v8.92c0,2.14,1.86,3.89,4.12,3.89h16.95c2.27,0,4.12-1.75,4.12-3.89V19.7
								C37.6,17.56,35.74,15.81,33.47,15.81 M21.08,28.32v-8.89l9.47,4.45L21.08,28.32z"/>
						</g>
					</svg>
				</a>
			</div>

			<div class="modalMenu_bottom">

				<div class="modalMenu_firstText">
					<p>Brought to you by the same creative minds behind </p>
					<span>IDSkids.</span>
				</div>

				<div class="modalMenu_secondText">
					<p>
						A division of SYC Group.
						Copyright 2007 - 2020
						Imagination Design Studios
					</p>
					<p>
						(Formerly Imagination Dental solutions).
					</p>
				</div>

				<div class="modalMenu-privacy">
					Privacy Policy
				</div>

			</div>

		</div>
	</div>


	<!-- Gallery Modal -->
	<div id="galleryModal" style="display: block;" class="galleryModal">
		<div class="galleryModal_wrap">
			<span class="galleryModal-title">
				Signage & Outdoor Landmarks
			</span>
			<span class="galleryModal-subtitle">
				Case Study Name
			</span>

			<div class="galleryModal_slider">
				<div class="galleryModal_slider_wrap">
					<div class="galleryModal_slider_item">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-2.jpg">
					</div>
					<div class="galleryModal_slider_item">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-3.jpg">
					</div>
					<div class="galleryModal_slider_item">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-4.jpg">
					</div>
					<div class="galleryModal_slider_item">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-1.jpg">
					</div>
				</div>
				<span id="galleryModal_arrowPrev" class="galleryModal_arrow"></span>
				<span id="galleryModal_arrowNext" class="galleryModal_arrow"></span>
			</div>

			<!-- THUMBNAILS -->
			<div class="slider-nav-thumbnails">
				<div class="slider-nav-thumbnails-item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-2.jpg">
				</div>
				<div class="slider-nav-thumbnails-item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-3.jpg">
				</div>
				<div class="slider-nav-thumbnails-item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-4.jpg">
				</div>
				<div class="slider-nav-thumbnails-item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/slider-1.jpg">
				</div>
			</div>

			<p class="galleryModal-desc">
				Don’t settle for ‘just like all the rest’. Be distinct. Distinguish your space.
				Weave an integrated theme throughout.
			</p>

		</div>
	</div>
