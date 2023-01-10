<?php get_header(); ?>

<main>
  <div class="shopBody">
    <?php
    if (is_singular('product')) {

      while (have_posts()) :
        the_post();
        wc_get_template_part('content', 'single-product');
      endwhile;
    } else {
    ?>

      <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>

        <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

      <?php endif; ?>

      <?php do_action('woocommerce_archive_description'); ?>

      <?php if (woocommerce_product_loop()) : ?>

        <?php do_action('woocommerce_before_shop_loop'); ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php if (wc_get_loop_prop('total')) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php wc_get_template_part('content', 'product'); ?>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php do_action('woocommerce_after_shop_loop'); ?>

    <?php
      else :
        do_action('woocommerce_no_products_found');
      endif;
    }
    ?>
  </div>

</main>

<?php get_footer(); ?>