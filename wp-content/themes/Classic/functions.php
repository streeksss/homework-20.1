
<?php

/*Stylesheet*/

function classic() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'classic');


/*Navigation*/


register_nav_menus(array(
    'header' => __('Head Menu'),
    'footer' => __('Foot Menu'),
));
