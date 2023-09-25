<?php
/**
 * The template part for displaying a message when posts cannot be found
 * @package TechGlazers
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'techglazers')?></h1>
    </header>
    <div class="page-content">
        <?php
            if(is_home() && current_user_can( 'publish_posts' )){
                ?>

                <p>
                    <?php
                        printf(
                            wp_kses(
                                    __( 'Ready to publish your first post? <a href="%s">Get Started Here </a> ', 'techglazers' ),
                                    [
                                        'a'=>[
                                            'href'=>[]
                                        ]
                                    ]
                                        ),
                                  esc_url( admin_url('post-new.php' ) )      
                        )
                    ?>
                </p>
                <?php
            }
             elseif (is_search()) {
                ?>
                <p><?php esc_html_e('Sorry but nothing matched your search. Please try again with different keywords', 'techglazers'); ?></p>
                <?php
                get_search_form();
            }
             else{
                    ?>
                    <p><?php esc_html_e('It seems that we cannot find what you were looking for, please use different keywords', 'techglazers'); ?></p>
                    <?php
                    get_search_form();
                }      
        ?>
    </div>
</section>

