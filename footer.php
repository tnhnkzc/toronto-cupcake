<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Toronto_Cupcake
 */

?>

<footer id="colophon" class="site-footer">
	<div class="firstContainer">
		<h4>Working Hours</h4>
		<p>
			Monday -> Saturday : <br>
			7.00 am -> 10.00 pm
		</p>
		<p>
			Sunday : <br>
			7.00 am -> 10.00 pm
			(No pick ups)
		</p>
	</div>
	<div class="secondContainer">
		<div class="icons">
			<a href="#"><img src="<?= bloginfo('template_directory'); ?>/assets/icons/facebook 1.png" alt=""></a>
			<a href="#"><img src="<?= bloginfo('template_directory'); ?>/assets/icons/instagram 1.png" alt=""></a>
			<a href="#"><img src="<?= bloginfo('template_directory'); ?>/assets/icons/twitter 1.png" alt=""></a>
		</div>
		<div class="links">
			<a href="">Privacy Policy</a>
			<a href="">Legal Mentions</a>
			<a href="">Website Terms</a>
			<a href="">FAQ</a>
		</div>
		<p class="torontoName">&copy; Toronto Cupcake</p>
	</div>
	<div class="thirdContainer">
		<h4>Contact Us</h4>
		<p>
			North America :
			+1-877-334-9468
		</p>
		<p>Toronto and GTA :
			647-478-9464</p>
		<p>Outside of North AM :
			+001-647-478-9464</p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>


</html>