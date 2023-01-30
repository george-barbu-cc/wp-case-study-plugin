<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * Plugin Name: Case Study
 * Plugin URI: 
 * Description: Displays a pop-up on the articles pages
 * Version: 1.0
 * Author: George Barbu
 * Author URI: https://george.barbu.cc
 * License: GPLv2 or later
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} 

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'CASE_STUDY_VERSION', '1.0.0' );


function pop_up_articles() {
	if ( is_single() ) { 
  		 include  plugin_dir_path( __FILE__ ) . '/views/pop-up-articles.php';
	}
}
add_action( 'wp_footer', 'pop_up_articles');


/**
 * Register the stylesheets for the public-facing side of the site.
 * Register the JavaScript for the public-facing side of the site.
 *
 * @since    1.0.0
 */

function enqueue_assets() {
    // Enqueue the bundled JavaScript file
    wp_enqueue_script( 'case-study', plugin_dir_url( __FILE__ ) . '.dist/bundle.js', array(), '1.0.0', true );

    // Enqueue the bundled CSS file
    wp_enqueue_style( 'case-study', plugin_dir_url( __FILE__ ) . '.dist/styles.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_assets' );