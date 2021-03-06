<?php

get_header() ; ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>Dont't forget to Add me Later...</p>
    </div>


  </div>
</div>

<div class="container container--narrow page-section">

  <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
  </div>

  <!-- <div class="page-links">
    <h2 class="page-links__title"><a href="#">About Us</a></h2>
    <ul class="min-list">
      <li class="current_page_item"><a href="#">Our History</a></li>
      <li><a href="#">Our Goals</a></li>
    </ul>
  </div> -->

<?php
  while (have_posts()) {
  the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>

<?php } ?>

</div>

<?php get_footer(); ?>