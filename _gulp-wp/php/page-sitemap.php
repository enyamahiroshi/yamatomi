<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--sitemap">
    <div class="inner-small">
      <nav class="sitemap-navi">
        <ul class="menu">
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/" class="menu__item__link">HOME</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/news/" class="menu__item__link">ニュース</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/brand/" class="menu__item__link">開発理念</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/product/" class="menu__item__link">製品案内</a>
            <ul class="sub-menu">
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/environmental-conservation-concrete-block" class="menu__item__link">環境保全コンクリートブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/landscape-function-concrete-block/" class="menu__item__link">景観機能コンクリートブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/structural-unction-concrete-block/" class="menu__item__link">構造機能コンクリートブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/basal-block/" class="menu__item__link">基礎ブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/large-sized-blocking-block/" class="menu__item__link">大型積みブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/paved-stone-car-stop-gardening-products/" class="menu__item__link">舗石・車止め・ガーデニング製品</a>
              </li>
            </ul>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/case-study/" class="menu__item__link">施工事例</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/company/" class="menu__item__link">会社案内</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/recruit/" class="menu__item__link">採用情報</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/contact/" class="menu__item__link">お問い合わせ・資料請求</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/download/" class="menu__item__link">各種製品資料ダウンロード</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/sitemap/" class="menu__item__link">サイトマップ</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo esc_url( home_url() ); ?>/privacy-policy/" class="menu__item__link">個人情報保護方針</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

<?php get_footer(); ?>