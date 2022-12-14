<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Toronto_Cupcake
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="banner">
		<h4>Shipping is now free for a limited time !</h4>
	</div>
	<section class="sliderSection">
		<?php echo do_shortcode('[metaslider id="12"]'); ?>
		<div class="btnDiv">
			<a class="bouton" href="<?= site_url(); ?>/index.php/shop">Shop Now</a>
		</div>
	</section>
	<section class="cupcakeSection" id="cupcake">
		<div class="cupcakesTitleDiv">
			<h3 class="cupcakesTitle">Best Selling Cupcakes</h3>
		</div>
		<div class="cupcakes">
			<?php echo do_shortcode('[products limit="3"]'); ?>
		</div>
	</section>
	<section class="eventSection" id="events">
		<div class="eventTitle">
			<h3>Events and Organisations</h3>
		</div>
		<div class="events">
			<div class="event-1">
				<h4>Corporate and Marketing Events</h4>
				<p class="eventText">
					From Product/Brand Launch to Customer Appreciation, Toronto Cupcake is able to provide you custom decorating to match that winning campaign. Our graphics are crystal clear and are edible!
				</p>
			</div>
			<div class="event-2">
				<h4>Occasions</h4>
				<p class="eventText">
					A celebration of life, love, and all of life's memorable events. We have over 1500 different combinations with our standard offerings but if you want something special that is also possible !
				</p>
			</div>
		</div>
		<div class="clients">
			<h4>Some of Our Clients</h4>
			<div class="images">
				<img src="<?= bloginfo('template_directory'); ?>/assets/images/versace.png" alt="">
				<img src="<?= bloginfo('template_directory'); ?>/assets/images/android.png" alt="">
				<img src="<?= bloginfo('template_directory'); ?>/assets/images/bmw.png" alt="">
				<img src="<?= bloginfo('template_directory'); ?>/assets/images/ibm.png" alt="">
				<img src="<?= bloginfo('template_directory'); ?>/assets/images/linkedin.png" alt="">
			</div>
	</section>
	<section class="aboutSection" id="about">
		<div class="aboutTitle">
			<h3>About Us</h3>
		</div>
		<div class="entryText">
			<h5>We are driven by loving what we do and what we make everyday. We get to use the finest ingredients to make what we believe are the tastiest treats around. </h5>
			<p>We are driven by loving what we do and what we make everyday. We get to use the finest ingredients to make what we believe are the tastiest treats around. </p>
		</div>
		<div class="michelle">
			<img src="<?= bloginfo('template_directory'); ?>/assets/images/MichellePhoto.png" alt="">
			<h5>About Michelle
				Toronto Cupcake was created by Michelle Harrison so she could pursue her love of baking. A lifelong baker, inspired by her mother, Michelle opened Toronto Cupcake in August 2010 as one of Canada's first gourmet cupcakeries.</p>
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
