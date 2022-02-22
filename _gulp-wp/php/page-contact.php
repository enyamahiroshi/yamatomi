<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--page-contact-head">
    <div class="inner-small">
      <p>製品に関してのお問い合わせ、資料請求は以下のフォームにてお気軽にご連絡ください。<br>また、お電話からのお問い合わせも承ります。</p>
      <div class="contact-by-tel">
        <em>電話でのお問い合わせ</em><a href="tel:0263-25-0387">0263-25-0387</a>
      </div>
      <nav class="step-contact">
        <div class="step-contact__label current">入力</div>
        <div class="step-contact__label">確認</div>
        <div class="step-contact__label">完了</div>
      </nav>
    </div>
  </section>

  <section class="sec sec--page-contact-body">
    <div class="inner-wide">
      <?php echo do_shortcode('[mwform_formkey key="72"]'); ?>
    </div>
  </section>

<?php get_footer(); ?>