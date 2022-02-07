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
    <a class="header_logo" href="<?php echo esc_url( home_url() ); ?>/">
      <figure class="header_logo_mark">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo_main.svg" alt="YAMATOMI たくさんの幸せな「風景」をつくりますつくります。">
      </figure>
      <div class="header_logo_compamy_name">山富産業株式会社</div>
    </a>
    <section class="global_menu">
      <nav class="menu-main_navi-container">
        <ul class="menu">
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/news/">ニュース<span>NEWS</span></a>
          </li>
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/brand/">開発理念<span>BRAND</span></a>
          </li>
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/product">製品案内<span>PRODUCT</span></a>
          </li>
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/case-study">施工事例<span>CASE STUDY</span></a>
          </li>
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/company/">会社案内<span>COMPANY</span></a>
          </li>
          <li class="menu_item">
            <a class="menu_link" href="<?php echo esc_url( home_url() ); ?>/recruit/">採用情報<span>RECRUIT</span></a>
          </li>
        </ul>
      </nav>
    </section>
    <a href="" target="_blank" rel="noopener noreferrer" class="button_search">検索</a>
    <a href="" target="_blank" rel="noopener noreferrer" class="button_inquery">お問い合わせ<span>・</span><br>資料請求</a>
    <button class="menu_bar js_tgl_menu"><span class="menu_bar_line"></span></button>
  </header>

  <main class="site_main">