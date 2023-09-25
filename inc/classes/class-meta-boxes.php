<?php
/**
 * Register Meta Boxes
 *
 * @package Techglazers
 */

namespace TECHGLAZERS_THEME\Inc;

use TECHGLAZERS_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
	use Singleton;

    protected function __construct(){
        $this->setup_hooks();
    }

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box' ]);
    }

    public function add_custom_meta_box(){
        $screens = [ 'post'];
        foreach ($screens as $screen){
            add_meta_box(
                'hide-page-title',
                __('Hide page title', 'techglazers'),
                [$this, 'custom_meta_box_html'],
                $screen,
                'side'
            );
        }
    }

    public function custom_meta_box_html($post){
        $value = get_post_meta( $post->ID, '_hide_page_title',true);
        ?>
        <label for="techglazers-field"><?php esc_html_e( 'Hide the page title' , 'techglazers');?> </label>
        <select name = "techglazers-field" id="techglazers-field" class= "postbox">
            <option value=""><?php esc_html_e('Select', 'techglazers');?></option>
            <option value="yes"<?php selected($value, 'yes');?>>
             <?php esc_html_e('Yes', 'techglazers');?>
            </option>
            <option value="no" <?php selected($value, 'no');?>>
             <?php esc_html_e('No', 'techglazers');?>
            </option>
    </select>
    <?php
    }
}
