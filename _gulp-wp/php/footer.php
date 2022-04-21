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
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/concrete-block" class="menu__item__link">コンクリートブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/large-sized-blocking-block/" class="menu__item__link">大型積みブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/koguchidome-uracon/" class="menu__item__link">小口止め・ウラコン</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/basal-block/" class="menu__item__link">基礎ブロック</a>
              </li>
              <li class="menu__item">
                <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/paved_stone-car_stop-other/" class="menu__item__link">舗石・車止め・その他</a>
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
  <div id="search-window" class="popup-block mfp-hide">
    <div class="search-button-wrap">
      <script async src="https://cse.google.com/cse.js?cx=881ecb474f294c4e6"></script>
      <div class="gcse-searchbox-only"></div>
    </div>
  </div>
<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18757173-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type =
'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>