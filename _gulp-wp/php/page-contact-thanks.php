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
      <nav class="step-contact">
        <div class="step-contact__label">入力</div>
        <div class="step-contact__label">確認</div>
        <div class="step-contact__label current">完了</div>
      </nav>
    </div>
  </section>

  <section class="sec sec--page-contact-body">
    <div class="inner-wide">
      <div class="thanks-content">
        <em>お問い合わせありがとうございました。</em>
        <p>担当より折り返しご連絡させていただきます。<br>数日経ちましても当社から連絡がない場合は、<br>お手数ですが再度お問い合わせくださいますよう、お願い申し上げます。</p>
      </div>
      <nav class="button-wrap button-wrap--band">
        <a href="<?php echo esc_url( home_url() ); ?>/" class="button button__base">トップページへ戻る</a>
      </nav>
    </div>
  </section>

<?php get_footer(); ?>