<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XJ0Q6FV5Q3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XJ0Q6FV5Q3');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png?211225">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" rel="icon">
</head>
<body id="top" <?php body_class(); ?>>

  <?php //header ?>
  <header class="site_header">
    <div class="header_logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_title_sub.png?211225" alt="小布施バーチャル町民会議"></div>
    <nav class="global_menu">
      <ul class="menu">
        <li class="menu_item"><a href="#concept">コンセプト</a></li>
        <li class="menu_item"><a href="#about">小布施バーチャル町民会議とは</a></li>
        <li class="menu_item"><a href="#schedule">日程・テーマ</a></li>
        <li class="menu_item"><a href="#details">募集要項</a></li>
        <!-- <li class="menu_item"><a href="#unneidayori">運営だより</a></li> -->
        <li class="menu_item"><a href="#faq">よくあるご質問</a></li>
        <li class="menu_item menu_item__inquery"><a href="https://forms.gle/rAjbCVrbGt2y5GwH9" target="_blank" rel="noopener noreferrer">お申し込み</a></li>
      </ul>
    </nav>
    <a href="https://forms.gle/rAjbCVrbGt2y5GwH9" target="_blank" rel="noopener noreferrer" class="button_inquery">お申込</a>
    <button class="menu_bar js_tgl_menu"><span class="menu_bar_line"></span></button>
  </header>

  <main class="site_main">