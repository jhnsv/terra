<?php
/**
 * Replace the_excerpt "more" text with a link
 *
 */

function ld_new_excerpt_more($more) {
    global $post;
    return ' <a class="more-link" href="'. get_permalink($post->ID) . '">[...]</a>';
}
add_filter('excerpt_more', 'ld_new_excerpt_more');