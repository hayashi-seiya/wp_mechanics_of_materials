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


/**
 * @return array
 */
function setIndex()
{
    setFileGetContentsTime();
    $html = file_get_contents("http://localhost/wordpress/");
    //*****には、データを取得したいhtmlが存在するurlを挿入して、該当するhtmlを$htmlという変数に代入します。

    $html = mb_convert_encoding($html, mb_internal_encoding(), "auto" );
    //上記の変数$htmlが日本語ページだった場合、マルチバイトエンコーディングを行って、
    //単なるテキストデータとして、新たに$htmlという変数に上書きで代入します。
//
//    preg_match( "/<h3 class=\"h3\">(.*?)<\/h3>/u", $html, $index);
//    //第2引数（$htmlというテキストデータ）の中から、
//    //第1引数の正規表現に該当するものをマッチさせ、
//    //第3引数の名前を持つ配列に格納する、という意味になります。
//    //ちなみに、正規表現のスラッシュの後に記されているuは、
//    //日本語などのマルチバイト表記に対応させる場合に必要なメタ文字になります。

    return $html;
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

function getIndex()
{
    return setIndex();
}

?>

