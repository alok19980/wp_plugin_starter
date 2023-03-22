<?php 
/*
 * Plugin Name:       WP Plugin Starter
 * Plugin URI:        https://aloksinghchauhan.in/
 * Description:       Basic Wordpress Plugin which does nothing
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Alok Singh Chauhan
 * Author URI:        https://aloksinghchauhan.in/
 */

 # Including Required files here 
 include("functions.php");

 # File Body starts here

 # registering plugin activation hook
 register_activation_hook( __FILE__, 'wpPluginStater_activate' );

 # registering plugin deactivation hook
 register_deactivation_hook( __FILE__, 'wpPluginStater_deactivate' );

 # registering uninstall hook
 register_uninstall_hook( __FILE__, 'wpPluginStater_uninstall');
 ?>