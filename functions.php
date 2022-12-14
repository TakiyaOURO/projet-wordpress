<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
   

   wp_register_style('third', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'third');

   wp_register_style('fourth', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', false,'1.1','all');
   wp_enqueue_style( 'fourth');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');

   wp_register_script('change', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');

   wp_register_script('popup', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popup');

   wp_register_script('carousel', get_template_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');

   wp_register_script('lightbox', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'lightbox');

   wp_register_script('lightboxy', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'lightboxy');

   wp_register_script('lightboxx', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'lightboxx');

}
add_action('wp_enqueue_scripts', 'add_script');
add_theme_support ( 'menus' ) ; 