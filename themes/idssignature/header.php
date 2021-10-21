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
			<img class="logo-light" src="<?php echo get_template_directory_uri() ?>/assets/images/IDSsignature-logowhite.svg">
			<img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/IDSsignature-logoblack.svg">
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
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<path d="M25,49.61C11.43,49.61,0.39,38.57,0.39,25C0.39,11.43,11.43,0.39,25,0.39c13.57,0,24.61,11.04,24.61,24.61
								C49.61,38.57,38.57,49.61,25,49.61z M25,2.15C12.4,2.15,2.15,12.4,2.15,25C2.15,37.6,12.4,47.85,25,47.85
								c12.6,0,22.85-10.25,22.85-22.85C47.85,12.4,37.6,2.15,25,2.15z"/>
							<path d="M21.25,16.98v3.9h-2.86v4.77h2.86V38.6h5.87V25.64h3.94c0,0,0.37-2.28,0.55-4.79h-4.46V17.6c0-0.49,0.64-1.14,1.27-1.14
								h3.2v-4.96h-4.35C21.1,11.49,21.25,16.27,21.25,16.98"/>
						</g>
					</svg>
				</a>
				<a href="https://www.instagram.com/idskids/" target="_blank">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<path d="M25,49.61C11.43,49.61,0.39,38.57,0.39,25C0.39,11.43,11.43,0.39,25,0.39c13.57,0,24.61,11.04,24.61,24.61
								C49.61,38.57,38.57,49.61,25,49.61z M25,2.15C12.4,2.15,2.15,12.4,2.15,25C2.15,37.6,12.4,47.85,25,47.85
								c12.6,0,22.85-10.25,22.85-22.85C47.85,12.4,37.6,2.15,25,2.15z"/>
							<path d="M25,14.62c3.38,0,3.79,0.01,5.12,0.07c1.24,0.05,1.91,0.26,2.35,0.44c0.59,0.23,1.01,0.5,1.46,0.95
								c0.44,0.44,0.72,0.87,0.95,1.46c0.17,0.45,0.38,1.12,0.44,2.35c0.06,1.34,0.08,1.74,0.08,5.12s-0.01,3.79-0.08,5.12
								c-0.06,1.24-0.26,1.91-0.44,2.35c-0.23,0.59-0.5,1.01-0.95,1.46c-0.45,0.44-0.87,0.72-1.46,0.95c-0.45,0.17-1.12,0.38-2.35,0.44
								c-1.33,0.06-1.74,0.08-5.12,0.08c-3.38,0-3.79-0.01-5.12-0.08c-1.24-0.06-1.91-0.26-2.35-0.44c-0.59-0.23-1.01-0.5-1.46-0.95
								c-0.44-0.45-0.72-0.87-0.95-1.46c-0.17-0.45-0.38-1.12-0.44-2.35c-0.06-1.33-0.07-1.74-0.07-5.12s0.01-3.78,0.07-5.12
								c0.06-1.24,0.26-1.91,0.44-2.35c0.23-0.59,0.5-1.01,0.95-1.46c0.45-0.45,0.87-0.72,1.46-0.95c0.45-0.17,1.12-0.38,2.35-0.44
								C21.22,14.63,21.62,14.62,25,14.62 M25,12.33c-3.44,0-3.87,0.01-5.22,0.08c-1.35,0.06-2.27,0.28-3.08,0.59
								c-0.83,0.32-1.54,0.76-2.24,1.46c-0.7,0.7-1.14,1.41-1.46,2.24c-0.31,0.81-0.53,1.73-0.59,3.08c-0.06,1.35-0.08,1.78-0.08,5.22
								c0,3.44,0.01,3.87,0.08,5.22c0.06,1.35,0.27,2.27,0.59,3.08c0.32,0.83,0.76,1.54,1.46,2.24c0.7,0.71,1.41,1.14,2.24,1.46
								c0.8,0.31,1.73,0.53,3.08,0.59c1.35,0.06,1.78,0.08,5.22,0.08c3.44,0,3.87-0.01,5.23-0.08c1.35-0.06,2.27-0.28,3.07-0.59
								c0.83-0.32,1.54-0.76,2.24-1.46c0.7-0.7,1.14-1.41,1.46-2.24c0.31-0.81,0.53-1.73,0.59-3.08c0.06-1.35,0.08-1.78,0.08-5.22
								c0-3.44-0.01-3.87-0.08-5.22c-0.06-1.35-0.27-2.27-0.59-3.08c-0.32-0.83-0.76-1.54-1.46-2.24c-0.71-0.7-1.41-1.14-2.24-1.46
								c-0.8-0.31-1.73-0.53-3.07-0.59C28.87,12.35,28.44,12.33,25,12.33"/>
							<path d="M25,18.5c-3.59,0-6.51,2.91-6.51,6.51s2.91,6.51,6.51,6.51c3.6,0,6.51-2.92,6.51-6.51S28.6,18.5,25,18.5 M25,29.23
								c-2.33,0-4.22-1.89-4.22-4.22c0-2.33,1.89-4.22,4.22-4.22c2.33,0,4.22,1.89,4.22,4.22C29.22,27.34,27.33,29.23,25,29.23"/>
							<path d="M33.29,18.24c0,0.84-0.68,1.52-1.52,1.52c-0.84,0-1.52-0.68-1.52-1.52c0-0.84,0.68-1.52,1.52-1.52
								C32.61,16.72,33.29,17.4,33.29,18.24"/>
						</g>
					</svg>
				</a>
				<a href="https://www.linkedin.com/company/imagination-design-studios/" target="_blank">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<path d="M25,49.61C11.43,49.61,0.39,38.57,0.39,25C0.39,11.43,11.43,0.39,25,0.39S49.61,11.43,49.61,25
								C49.61,38.57,38.57,49.61,25,49.61z M25,2.15C12.4,2.15,2.15,12.4,2.15,25C2.15,37.6,12.4,47.85,25,47.85
								c12.6,0,22.85-10.25,22.85-22.85C47.85,12.4,37.6,2.15,25,2.15z"/>
							<path d="M36.54,25.8v8.31h-4.82v-7.75c0-1.95-0.7-3.28-2.44-3.28c-1.33,0-2.12,0.9-2.47,1.76c-0.12,0.31-0.16,0.74-0.16,1.17v8.09
								h-4.82c0,0,0.07-13.13,0-14.49h4.82v2.05c-0.01,0.01-0.02,0.03-0.03,0.05h0.03v-0.05c0.64-0.99,1.78-2.39,4.34-2.39
								C34.16,19.27,36.54,21.34,36.54,25.8 M16.79,12.63c-1.65,0-2.73,1.08-2.73,2.5c0,1.39,1.05,2.5,2.66,2.5h0.03
								c1.68,0,2.73-1.11,2.73-2.5C19.45,13.71,18.44,12.63,16.79,12.63 M14.35,34.1h4.82V19.61h-4.82V34.1z"/>
						</g>
					</svg>
				</a>
				<a href="https://www.pinterest.com/idspins/_created/" target="_blank">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<path d="M25,49.61C11.43,49.61,0.39,38.57,0.39,25C0.39,11.43,11.43,0.39,25,0.39c13.57,0,24.61,11.04,24.61,24.61
								C49.61,38.57,38.57,49.61,25,49.61z M25,2.15C12.4,2.15,2.15,12.4,2.15,25C2.15,37.6,12.4,47.85,25,47.85
								c12.6,0,22.85-10.25,22.85-22.85C47.85,12.4,37.6,2.15,25,2.15z"/>
							<path d="M20.88,35.31c0.55-0.87,1.14-1.98,1.45-3.09c0.18-0.64,1.02-3.97,1.02-3.97c0.5,0.96,1.97,1.8,3.52,1.8
								c4.64,0,7.79-4.23,7.79-9.89c0-4.28-3.63-8.27-9.14-8.27c-6.85,0-10.31,4.92-10.31,9.01c0,2.48,0.94,4.69,2.96,5.51
								c0.33,0.14,0.63,0,0.72-0.36c0.07-0.25,0.22-0.89,0.29-1.16c0.1-0.36,0.06-0.49-0.21-0.8c-0.58-0.68-0.95-1.57-0.95-2.83
								c0-3.65,2.73-6.91,7.1-6.91c3.87,0,6,2.37,6,5.53c0,4.16-1.84,7.67-4.57,7.67c-1.51,0-2.64-1.25-2.28-2.78
								c0.43-1.83,1.28-3.8,1.28-5.12c0-1.18-0.64-2.16-1.95-2.16c-1.54,0-2.78,1.6-2.78,3.73c0,1.36,0.46,2.28,0.46,2.28
								s-1.58,6.69-1.86,7.86c-0.26,1.09-0.29,2.3-0.25,3.31l0.12,3.07L20.88,35.31z"/>
						</g>
					</svg>
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
					<a href="https://idskids.com/" target="_blank">IDSkids.</a>
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
	<div id="galleryModal" class="galleryModal">
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