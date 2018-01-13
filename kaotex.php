<?php
/*
		Plugin Name: KaoTeX
		Plugin URI: 
		Description: A flexible, easy-to-setup WordPress plugin to use KaTeX to render LaTeX maths expressions on your website. 
		Author: Sam Morrell
		Author URI: https://www.sammorrell.co.uk/
		Copyright: Sam Morrell
		License: MIT
		Version: 1.0.0
*/

<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>

<?php
include("kaotex-config.php");


add_action('init', 'kaotex_init');
add_action('wp_enqueue_scripts', 'kaotex_head_scripts');


function kaotex_init() {
	
}

function kaotex_head_scripts() {
	
}

?>