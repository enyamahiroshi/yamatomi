<?php get_header(); ?>

  <header class="page-header">
    <h1 class="page-header__title"><span>NEWS</span>ニュース</h1>
  </header>

  <section class="sec sec--archive-list">
    <div class="inner-small">
      <nav class="news-list">
        <ul class="term-list">
          <li class="cat-item">
            <a href="<?php echo esc_url( home_url() ); ?>/news/" class="current">ALL</a>
          </li>
          <?php
            $args = array(
              'hide_empty'         => 0,
              'title_li'           => '',
              'taxonomy'           => 'category',
            );
            wp_list_categories( $args );
          ?>
        </ul>
      </nav>
    </div>
  </section>

  <section class="sec sec--archive-post">
    <div class="inner-small">
      <?php // 記事リスト ?>
      <?php if ( have_posts() ) : ?>
      <section class="list-post-type--simple">
        <?php
          while( have_posts() ): the_post();
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
        ?>
        <article class="item">
          <div class="item__link__meta">
            <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
            <div class="label02 label--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="item__link__meta__titles__title"><?php the_title(); ?></a>
        </article>
        <?php endwhile; ?>
      </section>
      <?php endif; ?>

      <?php // ページネーション
      the_posts_pagination(
        array(
          'mid_size' => 1, // 現在ページの左右に表示するページ番号の数
          'prev_text'     => '', // 「前へ」リンクのテキスト
          'next_text'     => '', // 「次へ」リンクのテキスト
          'type'     => 'list', // 戻り値の指定 (plain/list)
        )
      ); ?>
    </div>
  </section>

<?php get_footer(); ?>