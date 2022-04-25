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
				<?php
				$subtitle = SCF::get('scf_product_subtitle');
				if( !empty($subtitle) ) {
					echo '<div class="post-sub-title">'.$subtitle.'</div>';
				}
				?>
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

			<?php // CF:画像表示
			for ($i=1; $i<=2; $i++){
				${"pImgs".$i} = "scf_larger_img".$i;
				${"pImg".$i} = SCF::get(${"pImgs".$i});
				if ( ${"pImg".$i} ) {
					${"pImgIMGthumb".$i} = wp_get_attachment_url(${"pImg".$i});
					${"pImgIMG".$i} = wp_get_attachment_url(${"pImg".$i});
				}
				${"pTitles".$i} = "scf_larger_title".$i;
				${"pTitle".$i} = SCF::get(${"pTitles".$i});
			}
			?>
			<?php if ($pImgIMG1 || $pImgIMG2): ?>
			<section class="post-cf-images">
			<?php if ($pImgIMG1): ?>
				<div class="post-cf-images__item">
					<figure class="post-cf-images__item__pic">
						<img class="post-cf-images__item__img" src="<?php echo $pImgIMGthumb1; ?>" alt="">
					</figure>
					<?php if ($pTitle1): ?>
						<p class="post-cf-images__item__pic__caption"><?php echo $pTitle1; ?></p>
					<?php endif; ?>
					<a href="<?php echo $pImgIMG1; ?>" class="button--expansion" target="_blank" rel="noopener noreferrer">画像拡大</a>
				</div>
			<?php endif; ?>
			<?php if ($pImgIMG2): ?>
				<div class="post-cf-images__item">
					<figure class="post-cf-images__item__pic">
						<img class="post-cf-images__item__img" src="<?php echo $pImgIMGthumb2; ?>" alt="">
					</figure>
					<?php if ($pTitle2): ?>
						<p class="post-cf-images__item__pic__caption"><?php echo $pTitle2; ?></p>
					<?php endif; ?>
					<a href="<?php echo $pImgIMG2; ?>" class="button--expansion" target="_blank" rel="noopener noreferrer">画像拡大</a>
				</div>
			<?php endif; ?>
			</section>
			<?php endif; ?>

			<?php // CF:詳細データ ?>
			<?php
			$scf_tbl_datas = SCF::get('scf_tbl_data');
			if( $scf_tbl_datas[0]['scf_tbl_data_label'] ):
			?>
			<h2 class="contents-title--small"><?php the_title(); ?>データ</h2>
			<table class="table-type1">
				<?php
				foreach ($scf_tbl_datas as $out_data) {
					echo '<tr>';
					echo '<th>'.$out_data['scf_tbl_data_label'].'</th>';
					echo '<td>'.$out_data['scf_tbl_data_text'].'</td>';
					echo '</tr>';
				}
				?>
			</table>
			<?php endif; ?>

			<?php // CF:環境に対する特性 ?>
			<?php
			for($i=1; $i<=5; $i++){
				${"tokuseinum".$i} = "scf_tokusei".$i;
				${"tokusei".$i} = SCF::get(${"tokuseinum".$i});
				switch(${"tokusei".$i}) {
					case 'true':
						${"tokuseiData".$i} = '〇';
						break;
					case 'false':
						${"tokuseiData".$i} = '-';
						break;
					default :
						${"tokuseiData".$i} = '';
						break;
				}
			}
			if($tokuseiData1 || $tokuseiData2 || $tokuseiData3 || $tokuseiData4 || $tokuseiData5):
			?>
			<h2 class="contents-title--small">環境に対する特性</h2>
			<table class="post-cf-characteristic">
				<tr>
				<?php if($tokuseiData1): ?>
					<th>法面の植生</th>
				<?php endif; ?>
				<?php if($tokuseiData2): ?>
					<th>水際の植生</th>
				<?php endif; ?>
				<?php if($tokuseiData3): ?>
					<th>水生生物の生息空間</th>
				<?php endif; ?>
				<?php if($tokuseiData4): ?>
					<th>横断方向の連続性</th>
				<?php endif; ?>
				<?php if($tokuseiData5): ?>
					<th>景観への配慮</th>
				<?php endif; ?>
				</tr>
				<tr>
				<?php if($tokuseiData1): ?>
					<td><?php echo $tokuseiData1; ?></td>
				<?php endif; ?>
				<?php if($tokuseiData2): ?>
					<td><?php echo $tokuseiData2; ?></td>
				<?php endif; ?>
				<?php if($tokuseiData3): ?>
					<td><?php echo $tokuseiData3; ?></td>
				<?php endif; ?>
				<?php if($tokuseiData4): ?>
					<td><?php echo $tokuseiData4; ?></td>
				<?php endif; ?>
				<?php if($tokuseiData5): ?>
					<td><?php echo $tokuseiData5; ?></td>
				<?php endif; ?>
				</tr>
			</table>
			<?php endif; ?>

    </div><?php // .inner ?>
  </section>

  <?php // download-navi ?>
  <section class="sec sec--navi-block">
    <div class="inner-wide">
      <h2 class="contents-title"><span>DOWNLOAD</span>各種資料ダウンロード</h2>
      <p class="contents-leading">各種製品資料のダウンロードはこちらから。</p>
      <nav class="button-wrap">
				<?php
				$pdfs = get_post_meta($post->ID, 'scf_catalog', false);
				$judge = array_filter($pdfs);
				if($judge) {
					foreach($pdfs as $pdf) {
						$url = wp_get_attachment_url($pdf);
						$path = str_replace(esc_url(home_url('/'))."wp/", ABSPATH, $url);
						$out = '<a href="'.$url.'" class="button button__large-light-pdf" target="_blank">カタログPDFダウンロード</a>';
						echo $out;
					}
				}
				?>
				<div class="button__download">
        	<a href="<?php echo esc_url( home_url() ); ?>/download/" class="button button__large">資料ダウンロードページはこちら<br>（CAD・仕様書）</a>
					<p class="link-content">
						<a href="<?php echo esc_url( home_url() ); ?>/contact/" class="link">初めての方はこちら</a>
					</p>
				</div>
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

	<?php get_footer(); ?>