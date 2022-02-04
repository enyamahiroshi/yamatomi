<?php get_header(); ?>

<?php if( in_category('recruit_information') ): ?>
<header class="sr-fadeIn2 page-header page-header--recruit_information">
  <h1 class="page-header__title">
		<div class="recruit__mark">
      <div class="recruit__mark__title1">RECRUIT INFO</div>
      <div class="recruit__mark__title2">採用のお知らせ</div>
      <div class="recruit__mark__cube"></div>
    </div>
	</h1>
</header>
<?php else: ?>
<header class="sr-fadeIn2 page-header page-header--news">
  <h1 class="page-header__title">お知らせ<span>NEWS</span></h1>
</header>
<?php endif; ?>

<main class="main-wrap">

	<div class="sec sec--small">
		<article class="main-column">
			<?php if(have_posts()): the_post(); ?>
			<?php
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			$cat_slug = $category[0]->category_nicename;
			$mainIMG  = get_field('main_image');
			?>
			<div class="post-meta">
				<div class="post-date"><?php the_time('Y.m.d'); ?></div>
				<?php /* <div class="post-cat post-cat--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div> */ ?>
				<h1 class="post-title"><?php the_title(); ?></h1>
			</div>

			<div class="post-body">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<div class="pagenation">
				<div class="prev"><?php if (get_previous_post( true )): ?><?php previous_post_link('%link'); ?><?php endif; ?></div>
			<?php if( in_category('recruit_information') ): ?>
				<div class="all"><a href="<?php echo esc_url(home_url()); ?>/category/recruit_information/" class="button button--01">採用のお知らせ一覧</a></div>
			<?php else: ?>
				<div class="all"><a href="<?php echo esc_url(home_url()); ?>/category/news/" class="button button--01">お知らせ一覧</a></div>
			<?php endif; ?>
				<div class="next"><?php if (get_next_post( true )): ?><?php next_post_link('%link'); ?><?php endif; ?></div>
			</div>

		</article>

	</div>

<?php get_footer(); ?>