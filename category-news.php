<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: news 一覧 ページ
*/
?>

<!-- header.phpの読み込み -->
<? get_header(); ?>

<main>
    <div class="wrapper">
        <!--メイン-->
        <main class="main_contents">
        <?php if (have_posts()): ?>
            <?php while(have_posts()) : the_post();?>
            <div class="archive_item">
                <!--カテゴリー記事一覧をパーツ化して読み込み-->
                <?php get_template_part('template-parts/loop'); ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </main>
        <!--サイドバー-->
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();