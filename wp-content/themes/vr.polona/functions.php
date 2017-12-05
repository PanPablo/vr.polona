<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 05.12.2017
 * Time: 01:51
 */
function vr_enqueue_script() {


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/style.css',
        true );

}
add_action( 'wp_enqueue_scripts' , 'vr_enqueue_script' );