<?php get_header(); ?>

	<header class="page-header">
    <h1 class="page-header__title"><span>NEWS</span>ニュース</h1>
  </header>

  <section class="sec sec--post">
    <div class="inner-small">
			<header class="post-header">
				<div class="post__meta">
					<div class="post__meta__date"><?php the_time('Y.m.d'); ?></div>
					<div class="label02"><?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->name;} ?></div>
				</div>
				<h1 class="post__title"><?php the_title(); ?></h1>
			</header><?php // eof 各記事 ?>
			<section class="post-body">
				<?php the_content(); ?>
			</section>
    </div>
		<div class="inner-wide">
			<nav class="button-wrap button-wrap--band">
        <a href="<?php echo esc_url( home_url() ); ?>/news/" class="button button__base">ニュース一覧へ戻る</a>
      </nav>
		</div>
  </section>

<?php get_footer(); ?>