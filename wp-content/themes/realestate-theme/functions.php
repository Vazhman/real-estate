<?php
function realestate_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  register_nav_menus(['primary' => 'Primary Menu', 'footer' => 'Footer Menu']);
}
add_action('after_setup_theme', 'realestate_theme_setup');

function realestate_enqueue_assets() {
  wp_enqueue_style('realestate-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style'], '1.2.0');
  wp_enqueue_script('realestate-main', get_stylesheet_directory_uri() . '/assets/main.js', [], '1.2.0', true);
}
add_action('wp_enqueue_scripts', 'realestate_enqueue_assets');

add_action('wp_enqueue_scripts', function() {
  if (!is_admin()) {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
  }
}, 100);

add_action('wp_head', function() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
  echo '<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">' . "\n";
}, 1);

function realestate_page_template($template) {
  if (is_front_page()) {
    $custom = get_stylesheet_directory() . '/page-home.php';
    if (file_exists($custom)) return $custom;
  }
  return $template;
}
add_filter('template_include', 'realestate_page_template');
