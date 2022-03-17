<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<header class="sr-fadeIn2 page-header page-header--<?php echo $slug; ?>">
  <h1 class="page-header__title"><?php echo the_title(); ?><span><?php echo $slug; ?></span></h1>
</header>

<main class="main-wrap">

  <section class="sec">
    <div class="inner">
		404 ページがみつかりません
    </div>
  </section>

<?php get_footer(); ?>