<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--search-results">
    <div class="inner-medium">
      <script async src="https://cse.google.com/cse.js?cx=881ecb474f294c4e6"></script>
      <div class="gcse-searchresults-only"></div>
    </div>
  </section>

<?php get_footer(); ?>