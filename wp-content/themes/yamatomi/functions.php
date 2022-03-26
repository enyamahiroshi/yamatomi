<?php
get_template_part( 'setting/system' );
get_template_part( 'setting/include_files' );
get_template_part( 'setting/custom-post-type' );
get_template_part( 'setting/customize-dashbord' );
get_template_part( 'setting/customize-plugins' );
get_template_part( 'setting/customize-block-editer' );
get_template_part( 'block/breadcrumb' );

/* -------------------------------------------------------------
//  タイトルタグ
// ------------------------------------------------------------*/
function metaTitleTag() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'metaTitleTag' );

/* -------------------------------------------------------------
//  メインループの表示件数を制御
// ------------------------------------------------------------*/
// 表示件数制御
// -1ですべて表示

add_action('pre_get_posts','my_pre_get_posts');
function my_pre_get_posts( $query ) {

  if(is_admin() || ! $query -> is_main_query()) { return; } //ダッシュボードはスルー

  // if($query -> is_front_page()) { //フロントページ
  //   $query -> set('posts_per_page', 10); //表示件数
  // }
  if($query->is_home()){ // アーカイブページ
    $query->set( 'posts_per_page', 10); //表示件数
  }
  // if($query->is_month()){ // 月別アーカイブ
  //   $query->set('posts_per_page', -1); //表示件数
  // }
  // if($query->is_year()){ // 年別アーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_author()){ // 作成者アーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_category()){ // カテゴリーアーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_search()){ // 検索結果ページ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_page('journal')){ // 固定ページ
  // $query->set('posts_per_page', 2); //表示件数
  // }
  // //カスタム投稿タイプのアーカイブ
  if($query -> is_post_type_archive()){
  $query -> set('posts_per_page', 10); //表示件数
    // $query -> set('order', 'ASC'); //昇順
    // $query -> set('orderby', 'date'); //日
  }
  // //カスタムタクソノミーのアーカイブ
  if($query -> is_tax()){
  $query -> set('posts_per_page', 10); //表示件数
    // $query -> set('order', 'ASC'); //昇順
    // $query -> set('orderby', 'date'); //日
  }
}

/* -------------------------------------------------------------
// body_class
// ------------------------------------------------------------*/
add_filter('body_class','add_posttype_classes');
function add_posttype_classes($classes) {
    $postype = get_query_var('post_type');
    $classes[] = $postype;
    if(!$postype ==""){
        $m_key = array_search('home', $classes);
        unset($classes[${'m_key'}]);
    }elseif ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;

    $parent_id = $page->post_parent;
      if ( 0 == $parent_id ) {
        $classes[] = get_post($parent_id)->post_name;
      } else {
        $progenitor_id = array_pop( get_ancestors( $page->ID, 'page', 'post_type' ) );
        $classes[] = get_post($progenitor_id)->post_name . '-child';
      }
  }
  return $classes;
}

/* -------------------------------------------------------------
// previous_post_link() と next_post_link() にクラス付加
// ------------------------------------------------------------*/
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="button prev-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="button next-link" href=', $output);
}

/* -------------------------------------------------------------
//the_excerpt() の内容変更
// ------------------------------------------------------------*/
// 区切り文字数を変える
function custom_excerpt_length( $length ) {
  return 125; //デフォルトは「110」
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// 省略文字を変える
function new_excerpt_more($more) {
	return '...'; //デフォルトは「【...】」
}
add_filter('excerpt_more', 'new_excerpt_more');

/* -------------------------------------------------------------
// カスタムメニュー
// ------------------------------------------------------------*/
// 有効化
add_theme_support('menus');
// liに付与されるclassやidを消す
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu__item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  // ただし以下のid,classは残す
  return is_array($var) ? array_intersect($var, array(
  'current-menu-item',
  'link-item-home',
  'link-item-pp',
  'link-item-recruit',
  'link-item-contact',
  'current-page-ancestor',
  )) : '';
}

/* -------------------------------------------------------------
// ウィジェットの使用
// ------------------------------------------------------------*/
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'before_widget' => '<section class="widget %1$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="hl03 widget__title">',
    'after_title'  => '</h3>',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

/* -------------------------------------------------------------
// 標準ギャラリーのCSSを停止
// ------------------------------------------------------------*/
add_filter( 'use_default_gallery_style', '__return_false' );

/* -------------------------------------------------------------
// アイキャッチの設定
// ------------------------------------------------------------*/
// アイキャッチを有効にする
add_theme_support( 'post-thumbnails' );
// アイキャッチの基本サイズ設定
set_post_thumbnail_size(300, 300, false) ;

/* -------------------------------------------------------------
//  記事作成後にカテゴリーの構造を保つようにする
// ------------------------------------------------------------*/
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

/* -------------------------------------------------------------
//  ダッシュボードにてカスタム投稿ポストをタクソノミーで絞り込みできるようにする
// ------------------------------------------------------------*/
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );
function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'plan' == $post_type ) {
        ?>
        <select name="plan_category">
            <option value="">カテゴリー指定なし</option>
            <?php
            $terms = get_terms('plan_category');
            foreach ($terms as $term) { ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
        <?php
    }
}