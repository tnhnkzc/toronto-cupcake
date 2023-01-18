<?php
/* Template Name: account */
get_header();
?>
<main id="primary" class="site-main">
  <?php
  while (have_posts()) :
    the_post();
  ?>
    <div class="content">
      <?php get_template_part('template-parts/content', 'page'); ?>
    </div>

  <?php
  endwhile;
  get_footer();
  ?>

</main>