<?php

add_theme_support( 'menus' ); /* navbar追加 */

function remove_ul ( $menu )
{
    /* <ul> 削除 */
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

function my_scripts() {
    /* jQuery追加 */
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/javascript.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function topIndex()
{
    $indexes = array("目的","本サイトの構成");
    return $indexes;
}

function aboutIndex()
{
    $indexes = array("材料力学とは");
    return $indexes;
}

function stressIndex()
{
    $indexes = array("応力とひずみとは","垂直応力と垂直ひずみ");
    return $indexes;
}

function tensileIndex()
{
    $indexes = array("目的","本サイトの構成");
    return $indexes;
}

function twistIndex()
{
    $indexes = array("目的","本サイトの構成");
    return $indexes;
}

function bendIndex()
{
    $indexes = array("目的","本サイトの構成");
    return $indexes;
}

function setFileGetContentsTime()
{
    //後で戻せるように設定を取得しておく
    $org_timeout = ini_get('default_socket_timeout');

    //5秒以上かかったらタイムアウトする設定に変更
    $timeout_second = 5;
    ini_set('default_socket_timeout', $timeout_second);
}

function getCurrentUrl()
{
    $page_url_get = 'http://'.$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];
    $search_url = array('index.php','thanks.php');
    $currentUrl = str_replace($search_url,'',$page_url_get);
    return $currentUrl;
}

