<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_starter_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<script>
		//  window.postData = <?php //  echo \WP_REACT_PARCEL_STARTER\printJsonPost(); ?>;
	</script>
	<header id="masthead" class="site-header content-container">
		<a href="/" class="site-branding">
		</a>
		<nav id="site-navigation" class="main-navigation mobile">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				));
			?>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">