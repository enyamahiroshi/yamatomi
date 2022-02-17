<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>

  <?php //header ?>
  <header class="site_header">
    <a href="<?php echo esc_url( home_url() ); ?>/" class="header_logo">
      <figure class="header_logo_mark">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo_main.svg" alt="YAMATOMI たくさんの幸せな「風景」をつくりますつくります。">
      </figure>
      <div class="header_logo_compamy_name">山富産業株式会社</div>
    </a>
    <section class="global_menu">
      <nav class="header_navi">
        <ul class="menu">
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/news/" class="menu_link">ニュース<span>NEWS</span></a>
          </li>
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/brand/" class="menu_link">開発理念<span>BRAND</span></a>
          </li>
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/product" class="menu_link">製品案内<span>PRODUCT</span></a>
          </li>
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/case-study" class="menu_link">施工事例<span>CASE STUDY</span></a>
          </li>
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/company/" class="menu_link">会社案内<span>COMPANY</span></a>
          </li>
          <li class="menu_item">
            <a href="<?php echo esc_url( home_url() ); ?>/recruit/" class="menu_link">採用情報<span>RECRUIT</span></a>
          </li>
        </ul>
      </nav>
    </section>
    <a href="" class="button_search">検索</a>
    <a href="<?php echo esc_url( home_url() ); ?>/contact/" class="button_inquery">お問い合わせ<span>・</span><br>資料請求</a>
    <button class="menu_bar js_tgl_menu" type="button"><span class="menu_bar_line"></span></button>
  </header>

  <main class="site_main">