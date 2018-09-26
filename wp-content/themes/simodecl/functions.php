<?php
function scratch_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
}
add_action('wp_enqueue_scripts', 'scratch_scripts');


function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebar-primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Main sidebar displaying the usual post info' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */

}
add_action( 'widgets_init', 'register_sidebar_locations' );

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
?>