<?php

/**
 *
 * Creating a custom job search form for homepage
 * The [jobs] shortcode is will use search_location and search_keywords variables from the query string.
 *
 * @link https://wpjobmanager.com/document/tutorial-creating-custom-job-search-form/
 *
 * @package JobScout
 */
$find_a_job_link = get_option('job_manager_jobs_page_id', 0);
$post_slug       = get_post_field('post_name', $find_a_job_link);
$ed_job_category = get_option('job_manager_enable_categories');

if ($post_slug) {
  $action_page =  home_url('/' . $post_slug);
} else {
  $action_page =  home_url('/');
}
?>

<?php
global $wpdb;
$table = $wpdb->prefix . 'postmeta';
$sql = "SELECT DISTINCT SUBSTRING_INDEX(`meta_value`, '.' ,-1) as location FROM `wp_postmeta` WHERE `meta_key` like '%location%' ORDER BY location";
$data = $wpdb->get_results($wpdb->prepare($sql));
?>

<div class="job_listings">

  <form class="jobscout_job_filters" method="GET" action="http://wordpress.local/jobs/">
    <div class="search_jobs">

      <div class="search_keywords">
        <label for="search_keywords"><i class="bi bi-search"></i></label>
        <input type="text" id="search_keywords" name="search_keywords" placeholder="<?php esc_attr_e('Search for jobs, companies, skill', 'jobscout'); ?>">
      </div>

      <div class="search_location">
        <label for="search_location"><i class="bi bi-geo-alt"></i></label>
        <select id="search_location" name="search_location">
          <?php
          foreach ($data as $item) {
          ?>
            <option value="<?php echo $item->location ?>"><?php echo $item->location ?></option>
          <?php
          }
          ?>
        </select>
      </div>

      <?php if ($ed_job_category) { ?>
        <div class="search_categories custom_search_categories">
          <label for="search_category"><?php esc_html_e('Job Category', 'jobscout'); ?></label>
          <select id="search_category" class="robo-search-category" name="search_category">
            <option value=""><?php _e('Select Job Category', 'jobscout'); ?></option>
            <?php foreach (get_job_listing_categories() as $jobcat) : ?>
              <option value="<?php echo esc_attr($jobcat->term_id); ?>"><?php echo esc_html($jobcat->name); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      <?php } ?>

      <div class="search_submit">
        <input type="submit" value="<?php esc_attr_e('SEARCH JOB', 'jobscout'); ?>" />
      </div>

    </div>
  </form>

</div>