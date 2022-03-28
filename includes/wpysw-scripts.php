<?php

// add script
function wpysw_add_scripts()
{
    wp_enqueue_style('ysw-style', plugins_url(). '/wp-youtube-subscribe-widget/css/style.css');
    wp_enqueue_script('ysw-script', plugins_url(). '/wp-youtube-subscribe-widget/js/script.js');

    // add google scripot
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');

}

add_action('wp_enqueue_scripts', 'wpysw_add_scripts');