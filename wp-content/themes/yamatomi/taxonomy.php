<?php get_header(); ?>

  <header class="page-header">
    <h1 class="page-header__title"><span>PRODUCT</span>製品案内</h1>
  </header>

  <section class="sec sec--archive-list">
    <div class="inner-medium">
      <nav class="product-list">
        <?php
          $myterms = array(
            'product-category',
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
  <section class="sec sec--archive-product">
    <div class="inner-wide">
      <h2 class="archive-product__title">環境保全コンクリートブロック</h2>
      <ul class="archive-product__list archive-product__list--left">
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-1.jpg);" class="archive-product__list__item__link">アニーヴンポーラススプリットン<br>（アニーヴンシリーズ）</a>
        </li>
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-2.jpg);" class="archive-product__list__item__link">ポーラススプリットン</a>
        </li>
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-3.jpg);" class="archive-product__list__item__link">アニーヴンポーラススプリットン<br>（アニーヴンシリーズ）</a>
        </li>
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-4.jpg);" class="archive-product__list__item__link">グリーンハーモニー ＢＰ</a>
        </li>
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-5.jpg);" class="archive-product__list__item__link">フラワーストーンIL</a>
        </li>
        <li class="archive-product__list__item">
          <a href="./annevin_bioporous_splitton/" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-archive1-6.jpg);" class="archive-product__list__item__link">フラワーストーン</a>
        </li>
      </ul>
    </div>
  </section>



  <?php /*
  <?php // 各リスト ?>
  <section class="sec sec--archive-product">
    <div class="inner-wide">
      <?php
        $queried_object = get_queried_object();
        $categoryname = $queried_object->name;
        // 記事数によってstyel変更
        $postnum = $queried_object->count;
        if( $postnum > 3 ) {
          $listcntent = "archive-product__list--center";
        } else {
          $listcntent = "archive-product__list--left";
        }
      ?>
      <h2 class="archive-product__title"><?php echo $categoryname; ?></h2>
      <ul class="archive-product__list <?php echo $listcntent; ?>">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <li class="archive-product__list__item">
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);" class="archive-product__list__item__link"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
      <?php endif; ?>
      </ul>
    </div>
  </section>
 */ ?>

<?php get_footer(); ?>