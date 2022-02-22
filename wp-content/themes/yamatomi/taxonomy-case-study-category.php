<?php get_header(); ?>

  <header class="page-header">
    <h1 class="page-header__title"><span>CASE STUDY</span>施工事例</h1>
  </header>

  <section class="sec sec--archive-list">
    <div class="inner-medium">
      <nav class="product-list">
        <?php
          $myterms = array(
            'case-study-category',
          );
          $args = array(
            'orderby'       => 'name',
            'hide_empty'    => false,
            'slug'          => '',
          );
          $taxonomy_terms = get_terms( $myterms, $args );
          if ( ! empty( $taxonomy_terms ) && ! is_wp_error( $taxonomy_terms ) ):
        ?>
        <ul class="term-list">
          <li class="term-list__item">
            <a href="<?php echo esc_url( home_url() ); ?>/product/" class="term-list__item__link">ALL</a>
          </li>
        <?php foreach ($taxonomy_terms as $taxonomy_term ): ?>
          <li class="term-list__item">
            <a href="<?php echo get_term_link( $taxonomy_term ); ?>" class="term-list__item__link<?php if($taxonomy_term->slug === $term){ echo ' current'; } ?>"><?php echo $taxonomy_term->name; ?></a>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </nav>
    </div>
  </section>

  <?php // 各リスト ?>
  <section class="sec sec--archive-case-study">
    <div class="inner-medium">
      <?php // 記事リスト ?>
      <?php if ( have_posts() ) : ?>
      <div class="list-post-type--thumbnail list--case-study">
        <?php
          while( have_posts() ): the_post();
          $taxonomy = 'case-study-category'; //カスタムタクソノミースラッグ
          $taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
          $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
        ?>
        <article class="item">
          <a href="<?php the_permalink(); ?>" class="item__link">
            <div class="item__link__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);"></div>
            <div class="item__link__meta">
              <div class="item__link__meta__date-category">
                <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
                <div class="label02"><?php echo $taxonomy_terms_cat_name; ?></div>
              </div>
              <div class="item__link__meta__titles">
                <div class="label01">使用製品</div>
                <div class="item__link__meta__titles__title"><?php the_title(); ?></div>
              </div>
              <table class="table-simple">
                <tr>
                  <th>工事名</th>
                  <td>元災公共土木施設災害復旧工事元災公共土木施設災害復旧工事</td>
                </tr>
                <tr>
                  <th>施工日</th>
                  <td>令和2年</td>
                </tr>
              </table>
            </div>
          </a>
        </article>
        <article class="item">
          <a href="<?php the_permalink(); ?>" class="item__link">
            <div class="item__link__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);"></div>
            <div class="item__link__meta">
              <div class="item__link__meta__date-category">
                <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
                <div class="label02"><?php echo $taxonomy_terms_cat_name; ?></div>
              </div>
              <div class="item__link__meta__titles">
                <div class="label01">使用製品</div>
                <div class="item__link__meta__titles__title"><?php the_title(); ?></div>
              </div>
              <table class="table-simple">
                <tr>
                  <th>工事名</th>
                  <td>元災公共土木施設災害復旧工事元災公共土木施設災害復旧工事</td>
                </tr>
                <tr>
                  <th>施工日</th>
                  <td>令和2年</td>
                </tr>
              </table>
            </div>
          </a>
        </article>
        <article class="item">
          <a href="<?php the_permalink(); ?>" class="item__link">
            <div class="item__link__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);"></div>
            <div class="item__link__meta">
              <div class="item__link__meta__date-category">
                <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
                <div class="label02"><?php echo $taxonomy_terms_cat_name; ?></div>
              </div>
              <div class="item__link__meta__titles">
                <div class="label01">使用製品</div>
                <div class="item__link__meta__titles__title"><?php the_title(); ?></div>
              </div>
              <table class="table-simple">
                <tr>
                  <th>工事名</th>
                  <td>元災公共土木施設災害復旧工事元災公共土木施設災害復旧工事</td>
                </tr>
                <tr>
                  <th>施工日</th>
                  <td>令和2年</td>
                </tr>
              </table>
            </div>
          </a>
        </article>
        <article class="item">
          <a href="<?php the_permalink(); ?>" class="item__link">
            <div class="item__link__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);"></div>
            <div class="item__link__meta">
              <div class="item__link__meta__date-category">
                <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
                <div class="label02"><?php echo $taxonomy_terms_cat_name; ?></div>
              </div>
              <div class="item__link__meta__titles">
                <div class="label01">使用製品</div>
                <div class="item__link__meta__titles__title"><?php the_title(); ?></div>
              </div>
              <table class="table-simple">
                <tr>
                  <th>工事名</th>
                  <td>元災公共土木施設災害復旧工事元災公共土木施設災害復旧工事</td>
                </tr>
                <tr>
                  <th>施工日</th>
                  <td>令和2年</td>
                </tr>
              </table>
            </div>
          </a>
        </article>
        <article class="item">
          <a href="<?php the_permalink(); ?>" class="item__link">
            <div class="item__link__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);"></div>
            <div class="item__link__meta">
              <div class="item__link__meta__date-category">
                <div class="item__link__meta__date"><?php the_time('Y.m.d'); ?></div>
                <div class="label02"><?php echo $taxonomy_terms_cat_name; ?></div>
              </div>
              <div class="item__link__meta__titles">
                <div class="label01">使用製品</div>
                <div class="item__link__meta__titles__title"><?php the_title(); ?></div>
              </div>
              <table class="table-simple">
                <tr>
                  <th>工事名</th>
                  <td>元災公共土木施設災害復旧工事元災公共土木施設災害復旧工事</td>
                </tr>
                <tr>
                  <th>施工日</th>
                  <td>令和2年</td>
                </tr>
              </table>
            </div>
          </a>
        </article>
        <?php endwhile; ?>
      </div>
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