<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id('search-form-');

$twentytwenty_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if (empty($twentytwenty_aria_label) && !empty($args['label'])) {
	$twentytwenty_aria_label = 'aria-label="' . esc_attr($args['label']) . '"';
}
?>
<!-- 
<form role="search" <?php echo $twentytwenty_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. 
					?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="<?php echo esc_attr($twentytwenty_unique_id); ?>">
		<span class="screen-reader-text">
			<?php
			/* translators: Hidden accessibility text. */
			_e('Search for:', 'twentytwenty'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations
			?>
		</span>
		<input type="search" id="<?php echo esc_attr($twentytwenty_unique_id); ?>" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwenty'); ?>" />
</form> -->

<!-- Start search link bootstrap -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- End search link -->
<div class="container">
	<br />
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-lg-8">
			<form class="card card-sm" role="search" <?php echo $twentytwenty_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. 
														?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
				<div class="card-body row no-gutters align-items-center">
					<div class="col-auto">
						<i class="fas fa-search h4 text-body"></i>
					</div>
					<!--end of col-->
					<div class="col">
						<input style="outline: none; border: none;" class="form-control form-control-lg form-control-borderless" type="search" id="<?php echo esc_attr($twentytwenty_unique_id); ?>" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php echo get_search_query(); ?>" name="s">
					</div>
					<!--end of col-->
					<div class="col-auto">
						<button class="btn btn-lg btn-success" type="submit">Search</button>
					</div>
					<!--end of col-->
				</div>
			</form>
		</div>
		<!--end of col-->
	</div>
</div>
<!-- Start search link js -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- End search link js -->