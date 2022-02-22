<?php

/* -------------------------------------------------------------
//  CSS,JSファイルの読込
// ------------------------------------------------------------*/
// ヘッダーにファイル追加
function import_files_to_header() {
  // wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
  /* slick.js スライダー */
  if ( is_front_page() || is_singular('product') || is_singular('case-study') ) {
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css');
  }
}
add_action( 'wp_enqueue_scripts', 'import_files_to_header' );

// フッターにファイル追加
function import_files_to_footer() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', true, array());
  /* slick.js スライダー */
  if ( is_front_page() || is_singular('product') || is_singular('case-study') ) {
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', true, array());
    wp_enqueue_script( 'run-slick', get_stylesheet_directory_uri() . '/assets/js/slick/run-slick.js', true, array());
  }
  /* ajaxzip3 */
  if ( is_page('contact') ) {
    wp_enqueue_script( 'ajaxzip3', get_stylesheet_directory_uri() . '/assets/js/ajaxzip3.js', true, array());
    wp_enqueue_script( 'ajaxzip3-run', get_stylesheet_directory_uri() . '/assets/js/ajaxzip3-run.js', true, array());
  }
}
add_action('wp_footer', 'import_files_to_footer');
?>