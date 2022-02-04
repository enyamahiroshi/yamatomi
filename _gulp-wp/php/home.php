<?php get_header(); ?>

<header class="sr-fadeIn2 page-header page-header--recruit_news">
  <h1 class="page-header__title">求人に関するお知らせ<span>RECRUIT NEWS</span></h1>
</header>

<main class="main-wrap">

  <section class="sec sec--small">
    <h2 class="headline01 sr-fadeInUp">求人に関するお知らせ一覧</h2>
    <?php if(have_posts()): ?>
    <ul class="post-list">
    <?php
    while(have_posts()): the_post();
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
    $cat_slug = $category[0]->category_nicename;
    ?>
      <li class="post-list__item">
        <div class="post-date"><?php the_time('Y.m.d'); ?></div>
        <?php /* <div class="post-category post-category--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div> */ ?>
        <a href="<?php the_permalink(); ?>" class="post-link"><?php the_title(); ?></a>
      </li>
    <?php endwhile; ?>
    </ul>
    <?php  endif; ?>
    <?php // ページナビ
    if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
  </section>

<?php get_footer(); ?>