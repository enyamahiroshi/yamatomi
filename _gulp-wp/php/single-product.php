<?php
/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 *
 * @package Neve
 */

$container_class = apply_filters( 'neve_container_class_filter', 'container', 'single-post' );

get_header();

?>
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container">
		<div class="row">
			<?php do_action( 'neve_do_sidebar', 'single-post', 'left' ); ?>
			<article id="post-<?php echo esc_attr( get_the_ID() ); ?>"
					class="<?php echo esc_attr( join( ' ', get_post_class( 'nv-single-post-wrap col' ) ) ); ?>">
				<?php
				/**
				 *  Executes actions before the post content.
				 *
				 * @since 2.3.8
				 */
				do_action( 'neve_before_post_content' );

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

				/**
				 *  Executes actions after the post content.
				 *
				 * @since 2.3.8
				 */
				do_action( 'neve_after_post_content' );
				?>
			</article>
			<?php do_action( 'neve_do_sidebar', 'single-post', 'right' ); ?>
		</div>
	</div>
<?php
get_footer();
