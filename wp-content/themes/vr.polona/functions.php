<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 05.12.2017
 * Time: 01:51
 */
add_theme_support('post-thumbnails');
function vr_enqueue_script() {


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/style.css',
        true );

}
add_action( 'wp_enqueue_scripts' , 'vr_enqueue_script' );

//paginacja

if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
        global $wp_query;
        $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;

