<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php language_attributes(); ?>" > <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>Nate Jones Design</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700|Roboto:100,300' rel='stylesheet' type='text/css'>
  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/normalize.css">
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css">

	<script src="<?php bloginfo('template_url'); ?>/javascripts/vendor/custom.modernizr.js"></script>

  	<meta name="geo.region" content="US-IL" />
		<meta name="geo.placename" content="Naperville" />
		<meta name="geo.position" content="41.7858629;-88.1472893" />
		<meta name="ICBM" content="41.7858629, -88.1472893" />
		<meta property="og:title" content="Nate Jones Design" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://pixelydo.com" />
		<meta property="og:image" content="images/natejones.jpg" />
		<meta property="og:site_name" content="Nate Jones Design" />
		<meta property="og:description" content="Nate Jones is the Associate Director of Admissions Digital Strategies for Columbia College Chicago, where he manages social media, interactive design + development, online advertising, and other fun digital things for recruitment. He's been designing, building, + refining higher ed and non-profit websites for over a decade, and is obsessed with responsive design and user experience." />
		<meta property="og:locale" content="en_US" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:url" content="http://pixelydo.com" />
		<meta name="twitter:title" content="Nate Jones Design" />
		<meta name="twitter:description" content="Nate Jones is the Associate Director of Admissions Digital Strategies for Columbia College Chicago, where he manages social media, interactive design + development, online advertising, and other fun digital things for recruitment. He's been designing, building, + refining higher ed and non-profit websites for over a decade, and is obsessed with responsive design and user experience." />
		<meta name="twitter:image" content="images/natejones.jpg" />
		<meta name="twitter:site" content="@natejones" />
		<meta name="twitter:creator" content="@natejones" />

<title><?php wp_title(); ?></title>

        <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="page-wrap">
		<?php
		if (is_front_page())
		{?>
	<div class="row one front">
		<div class="large-12 columns">
			<h1><a href="#" class="hamburger" id="hamburger"><i class="icon-reorder"></i>
					<ul id="dropit" class="dropit">
					  <li><a href="#work" class="scroll">nate&rsquo;s work</a></li>
					  <li><a href="#bio" class="scroll">nate&rsquo;s bio</a></li>
					  <li><a href="#contact" class="scroll">work with nate</a></li>
					</ul>				
			</a><span>nate jones</span><br />web design</h1>
		
		<?php } else { ?>
	<div class="row one">
		<div class="large-12 columns">		
			<h1><a href="<?php echo home_url(); ?>"><span>nate jones</span></a><br />web design</h1>
		<?php } ?>



		
		<!-- <?php echo home_url(); ?>" -->
		