<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package multimotors
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1406177466346209&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"> -->
	<?php //esc_html_e( 'Saltear al contenido', 'mmotors' ); ?>
	<!-- </a> -->

	<header id="masthead" class="site-header" role="banner">

		<div class="site-header__top" id="topBar">

			<div class="show-for-medium-up">
				<div class="fb-like" data-href="https://www.facebook.com/MultiMotors" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>

			<ul class="contact__list">
				<li class="contact__location"><i class="icon-location"></i> <span class="visually-hidden">Dirección:</span> Perú 317, CABA</li>
				<li class="contact__phone"><i class="icon-phone"></i> <span class="visually-hidden">Teléfono:</span> (011) 4342-1106 / 07</li>
				<li class="contact__email"><i class="icon-email"></i> <span class="visually-hidden">Email:</span> <a href="<?php echo bloginfo('url') ?>/contactenos" title="Contáctenos">Contáctenos</a></li>
				<li class="contact__facebook hide-for-medium-up"><i class="icon-facebook"></i> <a href="https://www.facebook.com/MultiMotors" title="Siganos en Facebook">Siganos en Facebook</a></li>
			</ul>

		</div>

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description  screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array(
					'theme_location'  => 'primary',
					'menu_id'         => 'primary-menu',
					'container_class' => 'site-menu'
				) ); ?>
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
