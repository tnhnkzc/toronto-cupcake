<?php
/* Template Name: Home */
/* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Toronto_Cupcake
 */

$img = get_field('info_about_image', 'infos');
$aboutText = get_field('info_about', 'infos');
$aboutEntry = get_field('info_about_entry', 'infos');
$events = get_field('info_events', 'infos');
$occasions = get_field('info_occasions', 'infos');
$occasionsTitle = get_field('info_occasions_title', 'infos');
$eventsTitle = get_field('info_events_title', 'infos');
get_header();


$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
);
$informations = new WP_Query($args);
?>

<main id="primary" class="site-main">
  <div class="banner">
    <h4>Shipping is now free for a limited time !</h4>
  </div>
  <section class="sliderSection">
    <?php echo do_shortcode('[metaslider id="12"]'); ?>
    <div class="btnDiv">
      <a class="bouton" href="<?= site_url(); ?>/shop">Shop Now</a>
    </div>
  </section>
  <section class="cupcakeSection" id="cupcake">
    <div class="cupcakesTitleDiv">
      <h3 class="cupcakesTitle">Best Selling Cupcakes</h3>
    </div>
    <div class="cupcakes">
      <?php echo do_shortcode('[products limit="3" columns="3"]'); ?>
    </div>
  </section>
  <section class="eventSection" id="events">
    <div class="eventTitle">
      <h3>Events and Organizations</h3>
    </div>
    <div class="events">
      <div class="event-1">
        <h4><?= $eventsTitle; ?></h4>
        <p class="eventText">
          <?= $events; ?>
        </p>
      </div>
      <div class="event-2">
        <h4><?= $occasionsTitle; ?></h4>
        <p class="eventText">
          <?= $occasions; ?>
        </p>
      </div>
    </div>
    <div class="clients">
      <h4>Some of Our Clients</h4>
      <div class="images">
        <?php if (have_rows('info_company_img', 'infos')) : ?>
          <?php while (have_rows('info_company_img', 'infos')) : the_row();
            $companyLogo = get_sub_field('logo');
          ?>
            <img src="<?= $companyLogo['url']; ?>" alt="">
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </section>
  <section class="aboutSection" id="about">
    <div class="aboutTitle">
      <h3>
        <?= $aboutEntry ?>
      </h3>
    </div>
    <div class="michelle">
      <img src="<?= $img['url']; ?>" alt="photo de michel">
      <h5>
        <p><?= $aboutText ?></p>
    </div>
  </section>
  <section class="contactSection" id="contact">
    <div class="contactTitle">
      <h3>Contact Us</h3>
    </div>
    <div class="contact">
      <div class="imageDiv">
        <img class="image" src="<?= bloginfo('template_directory'); ?>/assets/images/contactLetter.png" alt="">
      </div>
      <div class="contactForm"><?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>
      </div>
    </div>

  </section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
