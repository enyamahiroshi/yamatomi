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
            'hide_empty'    => true,
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

  <section class="sec sec--pfoduct-intro">
    <div class="inner-medium">
      <div class="product-intro">
        <figure class="product-intro-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/img_brand.png" alt="環境保全機能（生体機能） 景観機能 構造機能" width="834" height="780">
        </figure>
        <div class="product-intro-body">
          <strong>ASSIMILATE with NATURE</strong>
          <h2>草木を共に育て、その地の優しさを表現する。<br>そこには、自然と同化する美しさがあります。</h2>
          <p>人と自然、人と経済、人と他の生物の関係。それら全てが山富産業のテーマです。私たちは、人間社会におけるあらゆる「環境」を考えよりよい環境構築のために必要な機能を持つ製品を開発します。</p>
        </div>
      </div>
    </div>
  </section>

  <?php // 各リスト ?>
  <?php
    $taxnames = get_queried_object();
    $taxname = esc_html($taxnames->name);
    $taxslug = esc_html($taxnames->slug);
  ?>
  <section class="sec sec--archive-product sec--archive-product--<?php echo $taxslug; ?>">
    <div class="inner-wide">
      <h2 class="archive-product__title archive-product__title--<?php echo $taxslug; ?>"><?php echo $taxname; ?></h2>
      <?php
        if(have_posts()):
        global $wp_query;
        $postnum = $wp_query->found_posts;
        if ($postnum>3) {
          $thisstyle = 'left';
        } else {
          $thisstyle = 'center';
        }
      ?>
      <ul class="archive-product__list archive-product__list--<?php echo $thisstyle; ?>">
        <?php while(have_posts()): the_post(); ?>
        <li class="archive-product__list__item">
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large'); ?>" class="archive-product__list__item__link"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>