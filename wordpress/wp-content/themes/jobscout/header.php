<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */
/**
 * Doctype Hook
 * 
 * @hooked jobscout_doctype
 */
do_action('jobscout_doctype');
?>

<head itemscope itemtype="https://schema.org/WebSite">
    <link rel='stylesheet' id='jobscout-css' href='http://wordpress.local/wp-content/themes/jobscout/style.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
    /**
     * Before wp_head
     * 
     * @hooked jobscout_head
     */
    do_action('jobscout_before_wp_head');

    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

    <?php
    wp_body_open();

    /**
     * Before Header
     * @hooked jobscout_responsive_header - 15
     * @hooked jobscout_page_start - 20 
     */
    do_action('jobscout_before_header');

    /**
     * Header
     * 
     * @hooked jobscout_header - 20     
     */
    do_action('jobscout_header');

    /**
     * Content
     * 
     * @hooked jobscout_breadcrumbs_bar
     */
    do_action('jobscout_after_header');


    /**
     * Content
     * 
     * @hooked jobscout_content_start
     */
    do_action('jobscout_content');
