<?php

// Remove emoji from header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove contact form 7 js and css
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

//Making jQuery Google API
function modify_jquery() {
  if (!is_admin()) {
    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery');

// remove version from head
remove_action('wp_head', 'wp_generator');