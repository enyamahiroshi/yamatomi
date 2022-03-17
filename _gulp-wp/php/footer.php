  </main>

  <?php if( !is_front_page() ) {
	  create_breadcrumb();
  } ?>

  <?php //フッター ?>
  <footer class="site-footer">
    <div class="inner-medium">
      <section class="site-footer__contents">
        <div class="site-footer__contents__info">
          <div class="site-footer__contents__info__logo">山富産業株式会社</div>
          <address class="site-footer__contents__info__address">〒390-0831 長野県松本市井川城1-2-9</address>
          <p><a href="tel:0263-25-0387" class="site-footer__contents__info__tel"><span>TEL.</span>0263-25-0387</a></p>
          <nav class="button-wrap">
            <a href="<?php echo esc_url( home_url() ); ?>/contact/" class="button button__light">お問い合わせ・資料請求</a>
          </nav>
        </div>
        <nav class="site-footer__contents__footer-navi">
          <ul class="menu">
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/news/" class="menu__item__link">NEWS</a>
            </li>
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/brand/" class="menu__item__link">開発理念</a>
            </li>
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/product" class="menu__item__link">製品案内</a>
            </li>
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/case-study" class="menu__item__link">施工事例</a>
            </li>
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/company/" class="menu__item__link">会社案内</a>
            </li>
            <li class="menu__item">
              <a href="<?php echo esc_url( home_url() ); ?>/recruit/" class="menu__item__link">採用情報</a>
            </li>
          </ul>
          <div class="product_menu">
            <p class="product_menu_title">製品案内</p>
            <ul class="menu">
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
            <ul class="menu_other">
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/sitemap/" class="menu__item__link">サイトマップ</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/privacy-policy/" class="menu__item__link">個人情報保護方針</a>
              </li>
            </ul>
          </div>
        </nav>
      </section>
      <div class="copyright">Copyright (C) YAMATOMI Co.,Ltd. All rights Reserved</div>
    </div><?php // .inner ?>
  </footer>
  <a href="#top" class="page-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/btn_pagetop.svg" alt="PAGE TOP"></a>
<?php wp_footer(); ?>
</body>
</html>