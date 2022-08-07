<?php

require_once( TEMPLATEPATH . '/inc/redux.php' );

// Register your menus
function gatsby_theme_custom_menus() {
    $locations = array(
        'primary'   => __( 'Primary Menu', 'gastby-menu' ),
        'footer'  => __( 'Footer Menu', 'gastby-menu' ),
    );
    register_nav_menus( $locations );
 }

// Hook them into the theme 'init' action
add_action( 'init', 'gatsby_theme_custom_menus' );