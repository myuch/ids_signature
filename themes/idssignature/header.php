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
			<img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
			<div class="header_right">
				<a href="#" class="contactUs">
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
				<a href="/" target="_blank">1 888-884-4102</a>
				<a href="/" target="_blank">info@idssignature.com</a>
			</div>

			<div class="modalMenu_socials">
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook.png">
				</a>
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Instagram.png">
				</a>
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/LinkedIn.png">
				</a>
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Pinterest.png">
				</a>
				<a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/Youtube.png">
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
	

