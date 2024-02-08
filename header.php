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

		<!-- The callback parameter is required, so we use console.debug as a noop -->
		<!--
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC23mG6_0iLjkGf8GMpVfz3sF3OFzodgc&callback=initMap" async defer></script>
    -->

    	<script>
		  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
		    key: "AIzaSyAC23mG6_0iLjkGf8GMpVfz3sF3OFzodgc",
		    v: "weekly",
		    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
		    // Add other bootstrap parameters as needed, using camel case.
		  });
		</script>

    	<script>
		let map;
		async function initMap() {
  			const { Map } = await google.maps.importLibrary("maps");

			map = new Map(document.getElementById("map"), {
				center: { lat: 50.87752255, lng: -0.15155365 },
				zoom: 12,
			});

			// Marker 1
			new google.maps.Marker({
				position: { lat: 50.9311092, lng: -0.1772033 },
				map: map,
				title: 'Hurstpierpoint Lawn Tennis Club',
			});

			// Marker 2
			new google.maps.Marker({
				position: { lat: 50.8250679, lng: -0.1233311 },
				map: map,
				title: 'Queens Park Tennis Club',
			});
		}
		initMap();
    	</script>

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
