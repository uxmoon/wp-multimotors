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
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-mail" viewBox="0 0 28 28">
<title>mail</title>
<path class="path1" d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="icon-phone" viewBox="0 0 22 28">
<title>phone</title>
<path class="path1" d="M22 19.375c0 0.562-0.25 1.656-0.484 2.172-0.328 0.766-1.203 1.266-1.906 1.656-0.922 0.5-1.859 0.797-2.906 0.797-1.453 0-2.766-0.594-4.094-1.078-0.953-0.344-1.875-0.766-2.734-1.297-2.656-1.641-5.859-4.844-7.5-7.5-0.531-0.859-0.953-1.781-1.297-2.734-0.484-1.328-1.078-2.641-1.078-4.094 0-1.047 0.297-1.984 0.797-2.906 0.391-0.703 0.891-1.578 1.656-1.906 0.516-0.234 1.609-0.484 2.172-0.484 0.109 0 0.219 0 0.328 0.047 0.328 0.109 0.672 0.875 0.828 1.188 0.5 0.891 0.984 1.797 1.5 2.672 0.25 0.406 0.719 0.906 0.719 1.391 0 0.953-2.828 2.344-2.828 3.187 0 0.422 0.391 0.969 0.609 1.344 1.578 2.844 3.547 4.813 6.391 6.391 0.375 0.219 0.922 0.609 1.344 0.609 0.844 0 2.234-2.828 3.187-2.828 0.484 0 0.984 0.469 1.391 0.719 0.875 0.516 1.781 1 2.672 1.5 0.313 0.156 1.078 0.5 1.188 0.828 0.047 0.109 0.047 0.219 0.047 0.328z"></path>
</symbol>
<symbol id="icon-map-marker" viewBox="0 0 16 28">
<title>map-marker</title>
<path class="path1" d="M12 10c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM16 10c0 0.953-0.109 1.937-0.516 2.797l-5.688 12.094c-0.328 0.688-1.047 1.109-1.797 1.109s-1.469-0.422-1.781-1.109l-5.703-12.094c-0.406-0.859-0.516-1.844-0.516-2.797 0-4.422 3.578-8 8-8s8 3.578 8 8z"></path>
</symbol>
</defs>
</svg>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1406177466346209&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="site">

  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Saltear al contenido', 'mmotors' ); ?></a>

  <header id="masthead" class="site-header" role="banner">

    <div class="site-header__top">

      <div class="fb-like" data-href="https://www.facebook.com/MultiMotors" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

      <ul class="c-contact-list">
        <li> <svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg> <span class="screen-reader-text">Dirección:</span> Perú 317, CABA</li>
        <li> <svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg> <span class="screen-reader-text">Teléfono:</span> (011) 4342-1106 / 07</li>
        <li> <svg class="icon icon-map-marker"><use xlink:href="#icon-map-marker"></use></svg> <span class="screen-reader-text">Email:</span> <a href="<?php echo bloginfo('url') ?>/contactenos" title="Contáctenos">Contáctenos</a></li>
      </ul>

    </div>

    <div class="site-branding">

      <?php
      if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php if ( has_custom_logo() ) {
          the_custom_logo();
          } else {
          bloginfo( 'name' );
        } ?>
        </a></h1>

      <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php if ( has_custom_logo() ) {
          the_custom_logo();
          } else {
          bloginfo( 'name' );
        } ?>
        </a></p>
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
          'container_class' => 'c-anchor-nav'
        ) ); ?>
      </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
