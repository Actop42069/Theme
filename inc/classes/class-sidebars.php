<?php
/**
 * Registers sidebars
 *
 * @package Techglazers
 */

namespace TECHGLAZERS_THEME\Inc;

use TECHGLAZERS_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
        add_action('widgets_init', [$this, 'register_sidebars']);
	}

    public function register_sidebars(){
        register_sidebar([
            'name' => __('Sidebar', 'techglazers'),
            'id' => 'sidebar-1',
            'description' => __('Main Sidebar', 'techglazers'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class = "widget-title">',
            'after_title' => '</h3>'
        ]);

        register_sidebar([
            'name' => __('Footer', 'techglazers'),
            'id' => 'sidebar-2',
            'description' => __('Footer Sidebar', 'techglazers'),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class = "widget-title">',
            'after_title' => '</h3>'
        ]);
    }

}
