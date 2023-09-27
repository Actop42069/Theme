<?php
/**
 * Template for entry content
 * To be used inside WordPress The loop
 * @package TechGlazers
 */
?>

<div class="entry-content">
    <?php
        if(is_single()){
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue Reading %s <span class="meta-nav">&rarr;</span>', 'techglazers'),
                        [
                            'span' => [
                                'class' => []
                            ]
                        ]
                            ),
                            the_title('<span class="screen-reader-text">"', '"</span>', false)

                )
            );
        } else {
            techglazers_the_excerpt(  );
        }
    ?>
</div>