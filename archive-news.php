<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: カスタム投稿 News 一覧 ページ
*/
?>

<!-- header.phpの読み込み -->
<? get_header(); ?>

<main>
    <div class="wrapper">
        <!--メイン-->
        <main class="main_contents">

            <?#php 投稿の取得設定 ?>
            <?php
                if( have_posts() ):
                    // ループ前の開始タグ 
                    while( have_posts() ) : the_post(); 
                    // 投稿（1個あたり）の内容ここから
            ?>
                <!-- 出力したい処理を記述 -->
                <div class="news_wrap">
                    <div class="news_item mb-15" style="border: 1px solid black;">
                        <p class="title">ニュースタイトル:：<?php the_title(); ?></p>
                        <p>記事内容：<?php the_content(); ?></p>
                        <a href="<?php echo get_permalink(); ?>">詳細ページリンク</a>
                    </div>
                </div>
            <?php 
                    // ループ後の閉じタグ
                    endwhile; 
                endif; wp_reset_postdata();
            ?>

        </main>
    </div>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();