<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package encoretennis
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<!-- ENCORE TENNIS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />	

		<!-- Font: Google
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500&family=Roboto&display=swap" rel="stylesheet">
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->

		<!-- Slider: Splide
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/splide/css/splide.min.css">

		<!-- Font: Adobe
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="https://use.typekit.net/vbu2owy.css">

		<!-- Font: Icon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="https://kit.fontawesome.com/d256b19c43.js" crossorigin="anonymous"></script>

		<!-- Google tag (gtag.js) -->
 
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> style="background:url(<?php the_field('bg_image','option'); ?>;">
		<header>
			<div class="container">
				<?php get_template_part('template-parts/nav-walker5'); ?>
			</div>
		</header>
		<main>
