<?php get_header(); ?>

  <header class="page-header">
    <h1 class="page-header__title"><span>DOWNLOAD</span>ダウンロード</h1>
  </header>

  <?php // download ?>
  <section class="sec sec--download">
    <div class="inner-small">
      <?php if( have_posts() ): ?>
      <?php while( have_posts() ): the_post(); ?>
      <?php
      $file = get_post_meta(get_the_ID(), 'scf_dl_file', true);
      $fileUrl = wp_get_attachment_url($file);
      $fileType = SCF::get(esc_html('scf_dl_filetype'));
      $fileText = SCF::get(esc_html('scf_dl_filetext'));
      ?>
      <?php // ブロック：各記事 ?>
      <div class="post-download">
        <a href="<?php echo $fileUrl; ?>" class="button--download"><?php the_title(); ?>　ダウンロード</a>
        <div class="post-download__data">
          <span class="post-download__data__label">ファイル形式</span>
          <span class="post-download__data__file-type"><?php echo $fileType; ?></span>
          <span class="post-download__data__text"><?php echo $fileText; ?></span>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>