<?php

/* Template Name: checkout */

/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Toronto_Cupcake
 */

get_header();
?>

<main id="primary" class="checkout-main">

  <?php
  while (have_posts()) :
    the_post();
  ?>
    <div class="messageCheckout">
      <p>
        Thank you for choosing Toronto Cupcake !
      </p>
    </div>
  <?php
    get_template_part('template-parts/content', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
      comments_template();
    endif;

  endwhile; // End of the loop.
  ?>





</main><!-- #main -->