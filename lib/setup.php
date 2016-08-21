<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Filter out the 'category:' or 'author:' prefix
 * Move this to customisations.php
 */

add_filter( 'get_the_archive_title', function ($title) {
   if ( is_category() ) {
           $title = single_cat_title( '', false );
       } elseif ( is_tag() ) {
           $title = single_tag_title( '', false );
       } elseif ( is_author() ) {
           $title = '<span class="vcard">' . get_the_author() . '</span>' ;
       }
   return $title;
});

/**
 * Theme setup
 */

// default setup
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'footer_categories_one' => __('Footer Categories One', 'sage'),
    'footer_categories_two' => __('Footer Categories Two', 'sage'),
    'footer_pages' => __('Footer Pages', 'sage'),
    'footer_social-links' => __('Footer Social Links', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  // add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);


  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/*
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Regular Article Sidebar', 'sage'),
    'id'            => 'regular-article-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Archive Page Sidebar', 'sage'),
    'id'            => 'archive-page-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Category Page Featured', 'sage'),
    'id'            => 'category-page-featured',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Regular Article Related One', 'sage'),
    'id'            => 'regular-article-related-one',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
  ]);

  register_sidebar([
    'name'          => __('Regular Article Related Two', 'sage'),
    'id'            => 'regular-article-related-two',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
  ]);

  register_sidebar([
    'name'          => __('Front Strap One (Banner)', 'sage'),
    'id'            => 'front-strap-one',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Two', 'sage'),
    'id'            => 'front-strap-two',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Three', 'sage'),
    'id'            => 'front-strap-three',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Four', 'sage'),
    'id'            => 'front-strap-four',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Five', 'sage'),
    'id'            => 'front-strap-five',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Six', 'sage'),
    'id'            => 'front-strap-six',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Seven', 'sage'),
    'id'            => 'front-strap-seven',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Eight', 'sage'),
    'id'            => 'front-strap-eight',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Strap Nine', 'sage'),
    'id'            => 'front-strap-nine',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Headline Column', 'sage'),
    'id'            => 'front-headline-column',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Array Strap One', 'sage'),
    'id'            => 'front-array-one',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Front Array Strap Two', 'sage'),
    'id'            => 'front-array-two',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

  register_sidebar([
    'name'          => __('Footer Demon', 'sage'),
    'id'            => 'footer-demon',
    'before_widget' => '',
    'after_widget'  => '',
  ]);

}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
