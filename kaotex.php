<?php
/*
		Plugin Name: KaoTeX
		Plugin URI: https://www.sammorrell.co.uk/kaotex/
		Description: A flexible, easy-to-setup WordPress plugin to use KaTeX to render LaTeX maths expressions on your website. 
		Author: Sam Morrell
		Author URI: https://www.sammorrell.co.uk/
		Copyright: Sam Morrell
		License: MIT
		Version: 1.0.0
*/
?>

<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>

<?php

//add_action('init', 'kaotex_init');
add_shortcode('katex', 'kaotex_handle_shortcode');
add_shortcode('kaotex', 'kaotex_handle_shortcode');

add_action('wp_enqueue_scripts', 'kaotex_init_page');

function kaotex_init() {
}

function kaotex_init_page() {
	wp_register_script('katex', "//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.8.3/katex.min.js", array(), '0.8.3', false);
	wp_register_script('katex-auto-render', "//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.8.3/contrib/auto-render.min.js", array(), '0.8.3', false);
	wp_register_script('kaotex-frontend', plugin_dir_url( __FILE__ ) . "js/kaotex-frontend.js", array('katex', 'katex-auto-render'), '1.0.0', true);
}

function kaotex_handle_shortcode() {
	wp_enqueue_style( 'kaotex-frontend', "//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.8.3/katex.min.css" );
	wp_enqueue_script('kaotex-frontend');
}

?>