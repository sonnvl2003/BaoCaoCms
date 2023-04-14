<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$class = '';
if (!is_single()) {
	$class = 'danh-sach';
}
?>


<div class="search_">
	<div class="container top_news_block_desc" style="margin-top: 100px;">
		<header class="mb-5 mt-5">
			<h6 class="page-title text-center search-result-found --custom"> <?php echo $wp_query→found_posts; ?> <?php _e('Search Results Found For', 'locale'); ?>: "<?php the_search_query(); ?>" </h6>
		</header>
		<br />
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<form class="card card-sm" action="<?php echo esc_url(home_url('/')); ?>">
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input id="<?php echo esc_attr($twentytwenty_unique_id); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php echo get_search_query(); ?>" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwenty'); ?>">Search</button>
						</div>
						<!--end of col-->
					</div>
				</form>
			</div>
			<!--end of col-->
		</div>
	</div>
</div>


<div class="container_main" style="margin-top: 100px;">
	<div class="col-md-10">
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="col-md-6 top_news_block_desc">
				<div class="row" style="display: flex;">
					<div class="col-md-3 col-xs-3 topnewstime">
						<span class="topnewsdate">
							<?php if (!is_single()) echo "<div class='containerdate'>" . "<span class ='topnewdate'>" . get_the_date('m', $post->ID) . "</span>",
							"</div>"; ?>
						</span><br>
						<span class="topnewsmonth">Tháng 03</span><br>
					</div>
					<div class="col-md-9 col-xs-9 shortdesc">
						<h4>
							<a class="main_a" href="http://fit.tdc.edu.vn/tin-tuc/sinh-vien-tdc-thich-ung-voi-moi-truong-chuyen-doi-so-trong-doanh-nghiep-hien-nay">Sinh
								viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay</a>
						</h4>
						<p class="p">Sinh viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay<a href="http://fit.tdc.edu.vn/tin-tuc/sinh-vien-tdc-thich-ung-voi-moi-truong-chuyen-doi-so-trong-doanh-nghiep-hien-nay">[...]</a>
						</p>
					</div>

				</div>
			</div>

		</article><!-- .post -->
	</div>
</div>