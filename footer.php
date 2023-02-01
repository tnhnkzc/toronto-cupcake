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


$left_cont_title = get_field('left_container_title', 'infos');
$left_cont_content = get_field('left_container_content', 'infos');
$right_cont_title = get_field('right_container_title', 'infos');
$right_cont_content = get_field('right_container_content', 'infos');




?>

<footer id="colophon" class="site-footer">
	<div class="firstContainer">
		<h4><?= $left_cont_title ?></h4>
		<p>
			<?= $left_cont_content ?>
		</p>
	</div>
	<div class="secondContainer">
		<div class="icons">
			<?php if (have_rows('social_media', 'infos')) :
				while (have_rows('social_media', 'infos')) : the_row();
					$icon_social = get_sub_field('icon');
					$url_social = get_sub_field('url');
			?>
					<a href="<?= $url_social; ?>"><img src="<?= $icon_social['url']; ?>" alt=""></a>
				<?php endwhile; ?>
			<?php endif; ?>
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
		<h4><?= $right_cont_title; ?></h4>
		<p>
			<?= $right_cont_content; ?></p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>


</html>