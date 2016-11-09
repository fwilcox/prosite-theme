<?php
// Booststrap CDN, Fontawesome JS, Offcanvas
function my_scripts_enqueue() {
    wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), NULL, false );
    wp_register_script( 'fontawesome-js', 'https://use.fontawesome.com/9bd505a091.js', array(), NULL, true );

    wp_enqueue_script( 'bootstrap-js');
    wp_enqueue_script( 'fontawesome-js');
    wp_enqueue_script('offcanvas-js', get_template_directory_uri() . '/bootstrap.offcanvas.min.js' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );
remove_filter('the_content', 'wpautop');

//Styleheets
  function my_styles_enqueue() {
  wp_register_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );

  wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style('offcanvas-css', get_template_directory_uri() . '/bootstrap.offcanvas.min.css ', $in_footer = true);
  wp_enqueue_style('style',get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_styles_enqueue' );

// Google Fonts
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans|Sanchez', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// Theme Setup
function WordPress_setup() {

  // Navigation Menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));

  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('hero-image', 2000, 850, true);
  add_image_size('banner-image', 1140, 350, true);
}
  add_action('after_setup_theme', 'WordPress_setup');

  // Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

?>
