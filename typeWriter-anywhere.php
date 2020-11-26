<?php
/**
* Plugin Name: TypeWriter Anywhere
* Plugin URI: https://github.com/FreshyMichael/TypeWriter-Anywhere
* Description: Use this plugin to add a simple TypeWriter function inside text or code modules in any builder
* Version: 1.0.0
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
    wp_enqueue_style('fs-typeWriter-scripts', $dir . 'includes/css/styles.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'script', $dir . 'includes/js/typeWriter-anywhere.js', array ('txt/javascript'), '1.0.0', true);	
}

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/TypeWriter-Anywhere',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'TypeWriter-Anywhere'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* TypeWriter Anywhere End */
?>
