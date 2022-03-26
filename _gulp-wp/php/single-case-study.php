<?php get_header(); ?>

	<section class="kv--sub">
		<div class="inner-medium">
			<div class="slider2">
			<?php // CF:スライダー表示
			for ($i=1; $i<=4; $i++) {
				${"scf_slide_img".$i} = "scf_slide_img".$i;
				${"slimg".$i} = SCF::get(${"scf_slide_img".$i});
				if ( ${"slimg".$i} ) {
					$slideIMG = wp_get_attachment_url(${"slimg".$i});
					echo '<div class="slider__item">';
					echo '<div class="slider__item__image" style="background-image:url('.$slideIMG.')">';
					echo '</div>';
					echo '</div>';
				}
			}
			?>
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
			<table class="table-type1">
				<?php
				$scf_tbl_datas = SCF::get('scf_tbl_data');
				foreach ($scf_tbl_datas as $out_data) {
					echo '<tr>';
					echo '<th>'.$out_data['scf_tbl_data_label'].'</th>';
					echo '<td>'.$out_data['scf_tbl_data_text'].'</td>';
					echo '</tr>';
				}
				?>
			</table>

			<?php // CF:アイコン表示 ?>
			<div class="post-cf-icon">
				<?php
				$cf_icon = SCF::get('scf_icon');
				foreach ($cf_icon as $field): ?>
				<div class="icon-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case-study/case-study_<?php echo $field; ?>.png" alt=""></div>
				<?php endforeach; ?>
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

	<?php get_footer(); ?>