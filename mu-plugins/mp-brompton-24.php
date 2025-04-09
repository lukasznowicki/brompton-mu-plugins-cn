<?php
/*
 * Plugin Name: Phylax Brompton 24 Plugin
 * Description: Plugin to cover Brompton 24 functions
 * Author: Łukasz Nowicki
 * Author URI: https://lukasznowicki.info/
 * License: GPL v2 or later
 * Version: 0.0.1
 * Requires at least: 6.5
 * Requires PHP: 8.2
 */


add_action( "setup_theme", function () {
	if (defined("B24USER")) {
		return;
	}
	$user_16 = false;
    if ( function_exists( "wp_get_current_user" ) && (0 !== wp_get_current_user()->ID ) ) {
        $user_16 = true;
    }
	define("B24USER", $user_16);
} );