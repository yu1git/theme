<?php get_header(); //ヘッダーを読み込む ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                <?php if (is_home()): //投稿ホームの場合 ?>
                <h1 class="archive-title">BLOG</h1>
                <?php else: ?>
                <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
                <?php endif; ?>
                <div class="c-post-archive">
                    <?php if( have_posts(  ) ) : //もし投稿が一件以上あったら ?>
                    <?php while( have_posts(  ) ) : //投稿の表示条件を満たす間はくり返す ?>
                    <?php the_post(); //データ一件分を取り出して渡す ?>
                    
                    <!-- ▼ 投稿 : 開始-->
                    <article <?php post_class(); ?>>
                        <div class="hentry-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="<?php the_permalink(); ?>">
                                        <time class="entry-date published">
                                            <?php the_time( 'Y年n月j日 '); ?>
                                        </time>
                                    </a>
                                </div>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <?php the_category( '&nbsp;' ); ?>
                                    </span>
                                    <?php the_tags( '<span class="tags-links">','&nbsp;', '</span>'); ?>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <?php endwhile; //投稿ループ終了 ?>
                    
                    <!--▼ ページネーション(前後のページへ移動するためのリンク) : 開始-->
                    <?php the_posts_pagination(); ?>
                    <!--▲ ページネーション : 終了-->
                    <?php else: //もし表示すべき投稿がなかったら ?>
                        <p>当てはまる情報はまだありません</p>
                    <?php endif; //条件分岐終了 ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>