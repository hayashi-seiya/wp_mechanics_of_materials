<?php
/* navbar追加 */
add_theme_support( 'menus' );

/* <ul> 削除 */
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );


?>
