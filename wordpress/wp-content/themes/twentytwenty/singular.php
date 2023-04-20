<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="row">

		<div class="col-md-4">
			<div class="__categories">
				<div class="crossedbg"></div>
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
		</div>
		<div class="col-md-4">


			<?php

			if (have_posts()) {

				while (have_posts()) {
					the_post();

					get_template_part('template-parts/content', get_post_type());
				}
			}


			?>
		</div>
		<div class="col-md-4">
			<div class="__recent">
				<?php dynamic_sidebar('sidebar-3'); ?>
			</div>
		</div>
	</div>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
