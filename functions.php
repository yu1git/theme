<?php 
// コンテンツ幅をセット。
// isset:すでに変数に値が入っていたら上書きしない
if( ! isset( $content_width)){
    $content_width = 723;
}
function custom_theme_setup(){
    // head内にフィードリンクを出力
    add_theme_support( 'automatic-feed-links ' );

    // タイトルタグを動的に出力
    add_theme_support( 'title-tag' );

    // ブロックエディター用のCSSを有効化
    add_theme_support( 'wp-block-style' );

    // 埋め込みコンテンツをレスポンシブ対応に
    add_theme_support( 'responsive-embeds' );

}
add_action( ' after_setup_theme ', ' custom_theme_setup ' )

?>