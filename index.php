<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo( 'description' ); ?></div>
    <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <div class="c-logo__image">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png') ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </div>
        <div class="c-logo__text"><?php bloginfo( 'name' ); ?></div>
    </a>
    <div class="c-global-nav">
        <ul>
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/profile/')); ?>">PROFILE</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
            </li>
        </ul>
    </div>
</header>
<!-- ▲ ヘッダー : 終了-->
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                <h1 class="archive-title">BLOG</h1>
                <div class="c-post-archive">
                    <!-- ▼ 投稿 : 開始-->
                    <?php if( have_posts(  ) ) : //もし投稿が一件以上あったら ?>
                        <?php while( have_posts(  ) ) : //投稿の表示条件を満たす間はくり返す ?>
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <?php endwhile; //投稿ループ終了 ?>
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!-- ▼ 投稿 : 開始-->
                    <article class="hentry">
                        <div class="hentry-thumbnail">
                            <a href="../blog/01/">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="../blog/01/">
                                        <time class="entry-date published">
                                            2019年3月1日
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="../blog/01/">
                                        ここに投稿のタイトルが入ります。
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります。ここに抜粋文が入ります[…]</p>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <a href="#" rel="category">学習記録</a>
                                        <a href="#" rel="category">作品集</a>
                                    </span>
                                    <span class="tags-links">
                                        <a href="#" rel="tag">タグ1</a>
                                        <a href="#" rel="tag">タグ2</a>
                                    </span>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <!--▼ ページネーション : 開始-->
                    <nav class="navigation pagination" role="navigation">
                        <h2 class="screen-reader-text">投稿ナビゲーション</h2>
                        <div class="nav-links">
                            <span class='page-numbers current'>1</span>
                            <a class='page-numbers' href='#'>2</a>
                            <a class='page-numbers' href='#'>3</a>
                            <a class="next page-numbers" href="#">次ページへ</a>
                        </div>
                    </nav>
                    <!--▲ ページネーション : 終了-->
                </div>
            </div>
            <!-- ▼ サイドバー : 開始-->
            <div class="l-aside">
                <div class="c-widget">
                    <h2 class="c-widget__title">CATEGORIES</h2>
                    <ul>
                        <li>
                            <a href="#">学習記録</a>
                        </li>
                        <li>
                            <a href="#">作品集</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--▲ サイドバー : 終了-->
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<!-- ▼ フッター : 開始-->
<footer class="l-footer">
    <div class="l-container">
        <p class="c-footer-description"><?php bloginfo( 'description' ); ?></p>
        <a class="c-logo is-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="c-logo__image">
                <img src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png') ); ?>" alt="<?php bloginfo( 'name' ); ?>">
            </div>
            <div class="c-logo__text"><?php bloginfo( 'name' ); ?></div>
        </a>
    </div>
</footer>
<div class="c-copyright">
    <p>Copyright © 2019 <?php bloginfo( 'name' ); ?> All Rights Reserved.</p>
</div>
<!-- ▲ フッター : 終了-->
<?php wp_footer(); ?>
</body>
</html>
