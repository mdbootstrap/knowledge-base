<?php

require_once 'inc/assets.php';


/**
 * Setup Theme
 */
function mdbtheme_setup()
{
    // Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mdbtheme_setup');
