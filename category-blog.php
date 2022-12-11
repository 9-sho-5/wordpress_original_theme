<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: 投稿 blog 一覧 ページ
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
            $args = array(
                'post_type' => 'post',
                'category_name' => 'blog',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            ?>
            <!-- ループ前の開始タグ -->
            <div class="news_wrap">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <!-- 出力したい処理を記述 -->
                    <div class="news_item mb-15" style="border: 1px solid black;">
                        <p class="title">ニュースタイトル:：<?php the_title(); ?></p>
                        <p>記事内容：<?php the_content(); ?></p>
                        <a href="<?php echo get_permalink(); ?>">詳細ページリンク</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- ループ後の閉じタグ -->
            <?php endif; wp_reset_postdata(); ?>

        </main>
    </div>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();