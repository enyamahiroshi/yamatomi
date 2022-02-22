<?php get_header(); ?>

	<section class="kv--sub">
		<div class="inner-medium">
			<div class="slider2">
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_case-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_case-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_case-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_case-slide.jpg" alt="">
					</div>
				</div>
			</div>
			<header class="product-post-header">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-date"><?php the_time('Y.m.d'); ?></div>
				<div class="post-category">
					<?php
						$taxonomy = 'case-study-category';
						$taxonomy_terms_cat = get_the_terms($post->ID, $taxonomy);
						$taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name;
						echo $taxonomy_terms_cat_name;
					?>
				</div>
			</header>
		</div>
  </section>

	<?php // product ?>
  <section class="sec sec--post">
    <div class="inner-small">

			<?php // CF:詳細データ ?>
			<table class="post-cf-details">
				<tr>
					<th>使用製品</th>
					<td>スプリットン０５</td>
				</tr>
				<tr>
					<th>発注</th>
					<td>長野県上田建設事務所</td>
				</tr>
				<tr>
					<th>現場</th>
					<td>長野県小県郡長和町岩井下　（一）大門川</td>
				</tr>
				<tr>
					<th>工事名</th>
					<td>元災公共土木施設災害復旧工事</td>
				</tr>
				<tr>
					<th>施工日</th>
					<td>令和2年</td>
				</tr>
				<tr>
					<th>製品使用設計条件</th>
					<td>景観、環境及び施工性に配慮した製品</td>
				</tr>
			</table>

			<?php // CF:アイコン表示 ?>
			<div class="post-cf-icon">
				<div class="icon-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/icon_sample01.png" alt=""></div>
				<div class="icon-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/icon_sample01.png" alt=""></div>
				<div class="icon-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/icon_sample02.png" alt=""></div>
				<div class="icon-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/icon_sample03.png" alt=""></div>
			</div>

			<section class="post-body">
				<?php the_content(); ?>
			</section>

    </div><?php // .inner ?>

		<div class="inner-wide">
			<nav class="button-wrap button-wrap--band">
				<a href="<?php echo esc_url( home_url() ); ?>/product/" class="button button__base-product">製品案内一覧へ</a>
      </nav>
		</div>

  </section>

	<?php /*
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container">
		<div class="row"></div>
			<?php do_action( 'neve_do_sidebar', 'single-post', 'left' ); ?>
			<article id="post-<?php echo esc_attr( get_the_ID() ); ?>"
					class="<?php echo esc_attr( join( ' ', get_post_class( 'nv-single-post-wrap col' ) ) ); ?>">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content', 'single' );
							// カスタムフィールド読込み表示
							$pnum = get_field('p_num');
							$pprice = number_format(get_field('p_price'));
							$pmaker = get_field('p_maker');
							$pshipping = get_field('p_shipping');
							$pshipping_type = get_field('p_shipping_type');
							$pstock = get_field('p_stock');
							echo '<table class="tbl_type_product">';
							echo '<tr><th>商品番号</th><td>' . $pnum . '</td></tr>';
							echo '<tr><th>商品名</th><td>' . get_the_title() . '</td></tr>';
							echo '<tr><th>販売価格</th><td>' . $pprice . '円</td></tr>';
							echo '<tr><th>メーカー</th><td>' . $pmaker . '</td></tr>';
							echo '<tr><th>送料区分</th><td>' . $pshipping . '</td></tr>';
							echo '<tr><th>配送タイプ</th><td>' . $pshipping_type . '</td></tr>';
							echo '<tr><th>在庫</th><td>' . $pstock . '</td></tr>';
							echo '</table>';
						}
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
				?>
			</article>
		</div>
	</div>
	*/ ?>

	<?php get_footer(); ?>