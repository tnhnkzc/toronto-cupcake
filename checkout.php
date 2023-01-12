<?php

/* Template Name: checkout


/* 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Toronto_Cupcake
 */

get_header();
?>

<main id="primary" class="site-checkout">
  <div>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
  </div>
  <div>
  </div>
</main><!-- #main -->