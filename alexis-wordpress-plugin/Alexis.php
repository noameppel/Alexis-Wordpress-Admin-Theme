<?php
/**
 * @package Alexis-Admin-Theme
 * @version 0.5
 */
/*
Plugin Name: Alexis Admin Theme
Plugin URI: http://cleanforest.co/
Description: Alexis Admin Theme
Version: 0.5
Author: Noam Eppel
Author URI: http://cleanforest.co/
Text Domain: alexis-admin
Thanks:

 Badhon Ebrahim for creating the Wild Oliva Background
 http://subtlepatterns.com/wild-oliva/
*/

class AlexisGo {
	public function __construct() {
		add_action( 'admin_head', array( $this, 'alexis_admin_styles' ) );
		add_action( 'login_head', array( $this, 'alexis_login_styles' ) );
		add_filter( 'admin_footer_text', '__return_false' );
		add_filter( 'admin_footer_text', array( $this, 'alexis_footer_text' ) );
	}
	/*
  	Load the Custom Admin Stylesheets.
	*/
	function alexis_admin_styles() {
		$siteurl = get_option('siteurl');
		echo "<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css' />\n";
		$url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__));
		echo "<link rel='stylesheet' type='text/css' href='$url/alexis-admin.css?21' />\n";
	}
	
	
	/*
  	Load the Custom Login Page Stylesheet.
	*/
	function alexis_login_styles() { 
		$siteurl2 = get_option('siteurl');
		$url2 = $siteurl2 . '/wp-content/plugins' . basename(dirname(__FILE__)) . '/alexis-login.css?tcl3';
		echo "<link rel='stylesheet' type='text/css' href='$url2' />\n";
	}


	function alexis_footer_text() {
    	return 'Hello from Alexis.';
	}
}
$AlexisTheme = new AlexisGo;

?>
