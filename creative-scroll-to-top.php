<?php
/*
Plugin Name: Creative Scroll To Top
Plugin URI: http://learn-with-mnaopu.blogspot.com
Description: This plugin will add a scroll to top button on your website.
Author: Md. Naeem Ahmed Opu
Author URI: http://profiles.wordpress.org/mnaopu
Version: 1.0
*/

//Admin Notice
function creative_scroll_to_top_notice(){
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Thanks! For Using <strong>Creative Scroll to Top Plugin</strong>', '' ); ?></p>
    </div>
    <?php
}

function creative_scroll_to_top_style(){

	wp_enqueue_script('jquery');
	
	//CSS and JS File
	
	wp_register_style('creative-scroll-to-top-css',plugin_directory.'css/creative-scroll-to-top.css');
	wp_register_script('creative-scroll-to-top-js',plugin_directory.'js/creative-scroll-to-top.js', 'jquery');
	
	wp_enqueue_style('creative-scroll-to-top-css');
	wp_enqueue_script('creative-scroll-to-top-js');
}

// Register Style

add_action('wp_enqueue_scripts', 'creative_scroll_to_top_style');
?>