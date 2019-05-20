<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 -->


 <link rel="stylesheet" href="https://cdn.rawgit.com/jackmoore/colorbox/master/example1/colorbox.css" />


 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
 
<?php wp_head(); ?>
</head>
<style type="text/css">
	
body,
html {
  font-family: arial;
  background: #fffff0;
  color: #8f1f08;
  font-size: 20px;
  line-height: 1.3;
  margin: 0;
  padding: 0;
}

#container {
  width: 650px;
  padding: 10px;
  margin: 0 auto;
}

h1,
h2 {
  color: #2B292E
}

input {
  border: 1px solid #333;
  margin-bottom: 15px;
  min-width: 250px;
  padding: 8px;
}

.button {
  transition-duration: 0.4s;
  background: #720000;
  border: none;
  color: white;
  padding: 10px 20px;
  display: block;
  font-size: 16px;
  margin: 10px 2px;
  cursor: pointer;
}

button.button:hover {
  background: #990000
}

#cboxLoadedContent {
  padding: 10px;
  background: #fffff0;
}

#modal-content {
  display: none;
}

#modal-content label {
  display: block;
  margin-bottom: 5px;
}

#modal-content input {
  width: 95%;
}

	
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
