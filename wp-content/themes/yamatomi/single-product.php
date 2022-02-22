<?php get_header(); ?>

	<section class="kv--sub">
		<div class="inner-medium">
			<div class="slider2">
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-slide.jpg" alt="">
					</div>
				</div>
				<div class="slider__item">
					<div class="slider__item__image">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-slide.jpg" alt="">
					</div>
				</div>
			</div>
			<header class="product-post-header">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-sub-title">【深目地】</div>
				<div class="post-category">
					<?php
						$taxonomy = 'product-category';
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

			<section class="post-body">
				<?php the_content(); ?>
			</section>

			<?php // CF:画像表示 ?>
			<section class="post-cf-images">
				<?php // item ?>
				<div class="post-cf-images__item">
					<figure class="post-cf-images__item__pic">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-image01.jpg" alt="">
					</figure>
					<p class="post-cf-images__item__pic__caption">製品説明</p>
					<a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-image01.jpg" class="button--expansion">画像拡大</a>
				</div>
				<?php // item ?>
				<div class="post-cf-images__item">
					<figure class="post-cf-images__item__pic">
						<img class="slider__item__image__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-image02.jpg" alt="">
					</figure>
					<p class="post-cf-images__item__pic__caption">内部構造</p>
					<a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample/dammy_product-image01.jpg" class="button--expansion">画像拡大</a>
				</div>
			</section>

			<?php // CF:詳細データ ?>
			<h2 class="contents-title--small">アニーヴンビオポーラススプリットンデータ</h2>
			<table class="post-cf-details">
				<tr>
					<th>用途・工法</th>
					<td>河川護岸、法面、土留<br>ポーラス コンクリート積（張）</td>
				</tr>
				<tr>
					<th>自然環境保全機能</th>
					<td>植生　生物生息　景観構築</td>
				</tr>
				<tr>
					<th>構造</th>
					<td>練り積み、張工、積工</td>
				</tr>
				<tr>
					<th>圧縮強度</th>
					<td>18Ｎ以上（強度重視タイプ）</td>
				</tr>
				<tr>
					<th>ポーラス層空隙率</th>
					<td>16％以上（強度重視タイプ）</td>
				</tr>
				<tr>
					<th>適用勾配</th>
					<td>1：0.3～</td>
				</tr>
				<tr>
					<th>適用高さ（H）</th>
					<td>～7m</td>
				</tr>
				<tr>
					<th>適用流速（m/s）</th>
					<td>～8m/s</td>
				</tr>
				<tr>
					<th>構造の特長</th>
					<td>隔壁２層構造<br>ポーラスコンクリート（２層構造、割ブロック）</td>
				</tr>
			</table>

			<?php // CF:環境に対する特性 ?>
			<h2 class="contents-title--small">環境に対する特性</h2>
			<table class="post-cf-characteristic">
				<tr>
					<th>法面の植生</th>
					<th>水際の植生</th>
					<th>水生生物の生息空間</th>
					<th>横断方向の連続性</th>
					<th>景観への配慮</th>
				</tr>
				<tr>
					<td>〇</td>
					<td>-</td>
					<td>〇</td>
					<td>-</td>
					<td>〇</td>
				</tr>
			</table>

    </div><?php // .inner ?>
  </section>

  <?php // download-navi ?>
  <section class="sec sec--download-navi">
    <div class="inner-wide">
      <h2 class="contents-title"><span>DOWNLOAD</span>各種資料ダウンロード</h2>
      <p class="contents-leading">各種製品資料のダウンロードはこちらから。</p>
      <nav class="button-wrap">
        <a href="<?php echo esc_url( home_url() ); ?>/" class="button button__large-light-pdf">カタログPDFダウンロード</a>
        <a href="<?php echo esc_url( home_url() ); ?>/download/" class="button button__large">資料ダウンロードページはこちら<br>（CAD・仕様書）</a>
      </nav>
    </div>
  </section>

  <?php // page-navi ?>
  <section class="sec sec--page-navi">
		<div class="inner-wide">
			<nav class="button-wrap button-wrap--band">
				<a href="<?php echo esc_url( home_url() ); ?>/case-study/" class="button button__base-product">施工事例一覧へ</a>
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