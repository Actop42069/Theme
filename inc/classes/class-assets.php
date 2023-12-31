<?php
/**
 * Enqueue theme assets
 *
 * @package Techglazers
 */

namespace TECHGLAZERS_THEME\Inc;

use TECHGLAZERS_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( TECHGLAZERS_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'bootstrap-css', TECHGLAZERS_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'bootstrap-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'main-js', TECHGLAZERS_DIR_URI . '/assets/main.js', [], filemtime( TECHGLAZERS_DIR_PATH . '/assets/main.js' ), true );
		wp_register_script( 'bootstrap-js', TECHGLAZERS_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );



		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
	}

}
