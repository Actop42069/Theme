<?php
/**
 *
 * @package Techglazers
 */

namespace TECHGLAZERS_THEME\Inc\Traits;

trait Singleton {

	/**
	 */
	protected function __construct() {
	}

	/**
	 * Prevent object cloning
	 */
	final protected function __clone() {
	}

	/**
	 *
	 * @return object Singleton instance of the class.
	 */
	final public static function get_instance() {

		/**
		 * Collection of instance.
		 *
		 * @var array
		 */
		static $instance = [];

		/**
		 */
		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {

			$instance[ $called_class ] = new $called_class();

			/**
			 * Dependent items can use the `techglazers_theme_singleton_init_{$called_class}` hook to execute code
			 */
			do_action( sprintf( 'techglazers_theme_singleton_init_%s', $called_class ) ); 

		}

		return $instance[ $called_class ];

	}

} // End trait
