<?php
/**
 * https://web-guided.com/1141/
 */
function create_breadcrumb() {

  // wpオブジェクト取得
  $wp_obj = get_queried_object();

  // 共通
  echo
    '<nav class="breadcrumb-navi">'.
      '<ol class="breadcrumb-navi__lists" itemscope itemtype="http://schema.org/BreadcrumbList">'.
        '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
          '<a itemprop="item" href="' . home_url() . '" class="breadcrumb-navi__item__link">'.
            '<span itemprop="name" class="breadcrumb-navi__item__text">HOME</span>'.
          '</a>' .
          '<meta itemprop="position" content="1">'.
        '</li>';

  // 固定ページ（page-○○.php）, home.php
  if(is_page() || is_home()){
    echo
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<span itemprop="name" class="breadcrumb-navi__item__text">' . single_post_title('', false) . '</span>' .
        '<meta itemprop="position" content="2">'.
      '</li>';
  }

  // カスタム投稿 TOPページ（archive-○○.php）
  if(is_post_type_archive()){
    echo
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<span itemprop="name" class="breadcrumb-navi__item__text">' . $wp_obj->label . '</span>'.
        '<meta itemprop="position" content="2">'.
      '</li>';
  }

  // カテゴリー、カスタム投稿 タクソノミー一覧ページ（taxonomy-○○.php）
  if(is_category() || is_tax()){
    $post_slug = get_post_type();
    $post_label = get_post_type_object($post_slug)->label;
    echo
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<a itemprop="item" href="' . home_url($post_slug) . '" class="breadcrumb-navi__item__link">'.
          '<span itemprop="name" class="breadcrumb-navi__item__text">' . $post_label . '</span>'.
        '</a>' .
        '<meta itemprop="position" content="2">'.
      '</li>'.
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<span itemprop="name" class="breadcrumb-navi__item__text">「' . $wp_obj->name . '」カテゴリー一覧</span>'.
        '<meta itemprop="position" content="3">'.
      '</li>';
  }

  // カスタム投稿 詳細ページ（single-○○.php）
  if(is_singular() && !is_page()){
    $post_slug = get_post_type();
    $post_label = get_post_type_object($post_slug)->label;
    $post_id = $wp_obj->ID;
    $post_title = $wp_obj->post_title;
    echo
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<a itemprop="item" href="' . home_url($post_slug) . '" class="breadcrumb-navi__item__link">'.
          '<span itemprop="name" class="breadcrumb-navi__item__text">' . $post_label . '</span>'.
        '</a>' .
        '<meta itemprop="position" content="2">'.
      '</li>'.
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<span itemprop="name" class="breadcrumb-navi__item__text">' . $post_title . '</span>'.
        '<meta itemprop="position" content="3">'.
      '</li>';
  }

  // 404（404.php）
  if(is_404()){
    echo
      '<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem" class="breadcrumb-navi__item">'.
        '<span itemprop="name" class="breadcrumb-navi__item__text">404 Not Found</span>' .
        '<meta itemprop="position" content="2">'.
      '</li>';
  }

  // 共通
  echo
    '</ol>'.
  '</nav>';
}

?>