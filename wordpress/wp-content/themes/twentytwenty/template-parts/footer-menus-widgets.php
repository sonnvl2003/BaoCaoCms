<div class="bg-footer-custom">
	<div class="custom-widget-area-wrap container">
		<?php if (is_active_sidebar('sidebar-1')) : ?>
			<aside class="custom-widget-area">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</aside><!-- .widget-area -->
		<?php endif; ?>

		<?php if (is_active_sidebar('sidebar-2')) : ?>
			<aside class="custom-widget-area">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</aside><!-- .widget-area -->
		<?php endif; ?>

		<?php if (is_active_sidebar('sidebar-3')) : ?>
			<aside class="custom-widget-area">
				<?php dynamic_sidebar('sidebar-3'); ?>
			</aside><!-- .widget-area -->
		<?php endif; ?>

		<?php if (is_active_sidebar('sidebar-4')) : ?>
			<aside class="custom-widget-area">
				<?php dynamic_sidebar('sidebar-4'); ?>
			</aside><!-- .widget-area -->
		<?php endif; ?>
	</div>
</div>