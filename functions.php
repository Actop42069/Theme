<?php
/**
 * Theme Functions.
 *
 * @package Techglazer
 */


if ( ! defined( 'TECHGLAZERS_DIR_PATH' ) ) {
	define( 'TECHGLAZERS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'TECHGLAZERS_DIR_URI' ) ) {
	define( 'TECHGLAZERS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once TECHGLAZERS_DIR_PATH . '/inc/helpers/autoloader.php';
require_once TECHGLAZERS_DIR_PATH . '/inc/helpers/template-tags.php';

function techglazers_get_theme_instance() {
	\TECHGLAZERS_THEME\Inc\TECHGLAZERS_THEME::get_instance();
}

techglazers_get_theme_instance();
