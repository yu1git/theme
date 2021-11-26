<?php 
// コンテンツ幅をセット。
// isset:すでに変数に値が入っていたら上書きしない
if( ! isset( $content_width)){
    $content_width = 723;
}
function custom_theme_setup() {
    // head内にフィードリンクを出力
    add_theme_support( 'automatic-feed-links' );

    // タイトルタグを動的に出力
    add_theme_support( 'title-tag' );

    // ブロックエディター用のCSSを有効化
    add_theme_support( 'wp-block-styles' );

    // 埋め込みコンテンツをレスポンシブ対応に
    add_theme_support( 'responsive-embeds' );

    //アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 231, 177, false )

}
add_action( ' after_setup_theme ', ' custom_theme_setup ' );

function myportfolio_scripts(){
    wp_enqueue_style( 
        'base-style',           // ハンドル名
        get_stylesheet_uri(  ), // ファイルのパス
        array(),                // 依存関係
        '1.0',                  // バージョン指定
        'all'                   // メディアタイプ
    );
}
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );

// ウィジェットエリアの登録
function custom_widget_register() {
    register_sidebar(array(
        'name'          =>'サイバーウィジェットエリア',
        'id'            =>'sidebar-widget',
        'description'   =>'ブログページのサイドバーに表示されます',
        'befor_widget'  =>'<div id="%1$s" class="c-widget %2$s">',
        'after_widget'  =>'</div>',
        'befor_title'   =>'<h2 class="c-widget__title">',
        'after_title'   =>'</h2>',
    ));
}
add_action( 'widgets_init', 'custom_widget_register' )


?>