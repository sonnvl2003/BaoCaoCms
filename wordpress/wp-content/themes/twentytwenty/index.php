
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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		/**
		 * @global WP_Query $wp_query WordPress Query object.
		 */
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}
//Xu ly neu co bai viet
	if ( have_posts() ) {
		//Modul xuat ra gia tri tim kiem duoc
		//Xu ly tim kiem va xuat ra gia tri
	if ( is_search()) {
		while ( have_posts() ) {
			//Modul xuat ra tri tim kiem
			//Nhan tat ca cac bai post tu database
			the_post();
			//Do du lieu tu database
			$_post = get_post(); 
			//Nhan tieu de bai viet
			$_title = $_post->post_title;
			//Nhan noi dung bai viet tu database
			$post_content = $_post->post_content;
			//Xu ly lay ngay thang duoc tao tu database
			$day = substr(get_post()->post_date, 8, 2);
			$month = substr(get_post()->post_date, 5, 2);
			$year = substr(get_post()->post_date, 0, 4);
			//Nhan url duoc tao tu database
			$post_url = get_permalink();
			echo "<div class='list_new_view'>
			<div class='row'>
				<div class='col-md-7 top_news_block_desc'>
					<div class='row'>
						<div class='col-md-3 col-xs-3 topnewstime'>
							<span class='topnewsdate'>$day</span><br>
							<span class='topnewsmonth'>Tháng $month</span><br>
						</div>
						<div class='col-md-9 col-xs-9 shortdesc'>
							<h4>
								<a href='$post_url'>$_title</a></h4>
							<p>$post_content<a href='$post_url'>[...]</a></p>
						</div>
	
					</div>
				</div>
			</div>
			</div>";
		}
	}else {
		//Xuat ra tat ca cac bai viet khong biet truoc so luong nen sai While
		//Xuat ra danh sach bai viet tu database
	while ( have_posts() ) {
		
		//Nhan tat ca cac bai post tu database
		the_post();
		//Do du lieu tu database
		$_post = get_post(); 
		//Nhan tieu de bai viet
		$_title = $_post->post_title;
		//Nhan noi dung bai viet tu database
		$post_content = $_post->post_content;
		//Xu ly lay ngay thang duoc tao tu database
		$day = substr(get_post()->post_date, 8, 2);
		$month = substr(get_post()->post_date, 5, 2);
		$year = substr(get_post()->post_date, 0, 4);
		//Nhan url duoc tao tu database
	    $post_url = get_permalink();
		echo "<div class='list_new_view'>
		<div class='row'>
			<div class='col-md-7 top_news_block_desc'>
				<div class='row'>
					<div class='col-md-3 col-xs-3 topnewstime'>
						<span class='topnewsdate'>$day</span><br>
						<span class='topnewsmonth'>Tháng $month</span><br>
					</div>
					<div class='col-md-9 col-xs-9 shortdesc'>
						<h4>
							<a href='$post_url'>$_title</a></h4>
						<p>$post_content<a href='$post_url'>[...]</a></p>
					</div>

				</div>
			</div>
		</div>
		</div>";
	}
	}
	
		
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}


		
	
	?>
	<!-- Searchbar -->
	<div class="wrapper">
		<div class="search-box-wrapper">
			<div class="search-box" style="margin: 0 300px;">
				<form action="" method="get" class="search-form">
					<input type="text" class="search-field" name="s" placeholder="Search">
					<input class="bottom_search" type="submit" class="search-submit" value="submit">
				</form>
			</div>
	</div>
	</div>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

