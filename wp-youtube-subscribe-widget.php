<?php
/*
Plugin Name: WP Youtube Subscribe Widget
Plugin URI: http://ameenulhaq.com
Description: WP Youtube Subscribe Widget
Version: 1.0.0
Author: Ameen
Author URI: http://ameenulhaq.com
Text Domain: wpysw_domain
Domain Path: /languages
*/

if(!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/wpysw-scripts.php');
// Widget Class
require_once(plugin_dir_path(__FILE__).'/includes/wpysw-class.php');

function register_wpysw() {
    register_widget( 'wpysw_Widget' );
}

add_action( 'widgets_init', 'register_wpysw' );


