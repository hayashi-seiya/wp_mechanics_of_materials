<?php

add_theme_support( 'menus' ); /* navbar追加 */

function remove_ul ( $menu )
{
    /* <ul> 削除 */
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );
