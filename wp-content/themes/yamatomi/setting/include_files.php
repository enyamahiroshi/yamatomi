<?php

/* -------------------------------------------------------------
//  CSS,JSファイルの読込
// ------------------------------------------------------------*/
// ヘッダーにファイル追加
function import_files_to_header() {

  // IE11だけに読み込む
  // $ua = getenv('HTTP_USER_AGENT');
  // if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) {
  //   wp_enqueue_style( 'ie11', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
  // }

  // wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
  // slick.js スライダー
  // if ( is_front_page() || is_post_type_archive('recruit') ) {
  //   wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css');
  //   wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css');
  // }
  // ajaxzip3
  // if ( is_page('entry_form') ) {
  //   wp_enqueue_script( 'ajaxzip3-script', 'https://ajaxzip3.github.io/ajaxzip3.js', array(), false, true );
  // }
}
add_action( 'wp_enqueue_scripts', 'import_files_to_header' );

// フッターにファイル追加
function import_files_to_footer() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', true, array());
  // slick.js スライダー
  // if ( is_front_page() || is_post_type_archive('recruit') ) {
  //   wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', true, array());
  //   wp_enqueue_script( 'run-slick', get_stylesheet_directory_uri() . '/assets/js/slick/run-slick.js', true, array());
  // }
}
add_action('wp_footer', 'import_files_to_footer');
?>