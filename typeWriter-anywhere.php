<?php
/**
* Plugin Name: TypeWriter Anywhere
* Plugin URI: https://github.com/FreshyMichael/TypeWriter-Anywhere
* Description: Use this plugin to add a simple TypeWriter function inside text or code modules in any builder
* Version: 1.0.2
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* TypeWriter Anywhere Start */
//______________________________________________________________________________

add_action( 'wp_enqueue_scripts', 'fs_typeWriter_scripts' );
function fs_typeWriter_scripts() {
    $dir = plugin_dir_url(__FILE__);
    wp_enqueue_style('fs-typeWriter-scripts', $dir . 'includes/css/styles.css', array(), '1.0.1', 'all');
    wp_register_script( 'fs_typeWriter_script', $dir . 'includes/js/typeWriter-anywhere.js');	
	wp_enqueue_script('fs_typeWriter_script');
}

/* TypeWriter Anywhere End */
?>
