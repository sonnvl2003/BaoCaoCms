<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group">
		<div class="container-fluid">
			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod('enable_header_search', true);

					if (true === $enable_header_search) {

					?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg('search'); ?>
								</span>
								<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
						// Site title or logo.
						twentytwenty_site_logo();

						// Site description.
						twentytwenty_site_description();
						?>

					</div><!-- .header-titles -->

					<a id="home" class="active" href="<?php echo get_home_url() ?>">Home</a>

					<form class="search-custom-modal" action="<?php echo get_site_url() ?>">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="s">
							<button class="btn btn-outline-secondary">Submit</button>
						</div>
					</form>


					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg('ellipsis'); ?>
							</span>
							<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
					?>

						<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">

							<ul class="primary-menu reset-list-style">

								<?php
								if (has_nav_menu('primary')) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);
								} elseif (!has_nav_menu('expanded')) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);
								}
								?>

							</ul>

						</nav><!-- .primary-menu-wrapper -->

					<?php
					}

					if (true === $enable_header_search || has_nav_menu('expanded')) {
					?>

						<div class="header-toggles hide-no-js">

							<?php
							if (has_nav_menu('expanded')) {
							?>

								<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

									<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
										<span class="toggle-inner">
											<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
											<span class="toggle-icon">
												<?php twentytwenty_the_theme_svg('ellipsis'); ?>
											</span>
										</span>
									</button><!-- .nav-toggle -->

								</div><!-- .nav-toggle-wrapper -->

							<?php
							}

							if (true === $enable_header_search) {
							?>

								<div class="toggle-wrapper search-toggle-wrapper">
									<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
										<span class="toggle-inner">
											<?php twentytwenty_the_theme_svg('search'); ?>
											<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
										</span>
									</button><!-- .search-toggle -->
								</div>

							<?php
							}
							?>

							<div class="dropdown-wrapper">
								<div class="avatar-wrapper d-flex flex-column text-center">
									<a class="mt-1" href="<?php echo get_edit_user_link(get_current_user_id()) ?>">
										<img id="avatar" src="<?php echo get_avatar_url(get_current_user_id()) ?>" class="rounded-circle" alt="user-avatar">
									</a>

									<?php $currentUser = wp_get_current_user() ?>
									<span><?php echo is_user_logged_in() ? $currentUser->display_name : "Account" ?>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></span>
								</div>
								<ul class="custom-dropdown-menu">
									<?php if (is_user_logged_in()) { ?>
										<li class="list-unstyled"><a href="<?php echo get_edit_user_link(get_current_user_id()) ?>">Profile</a></li>
										<li class="list-unstyled"><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
									<?php } else { ?>
										<li class="list-unstyled"><a href="<?php echo wp_login_url() ?>">Login</a></li>
									<?php } ?>
								</ul>
							</div>

						</div><!-- .header-toggles -->
					<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->
		</div>

		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
