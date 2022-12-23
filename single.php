<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: 【投稿】詳細ページ
*/
?>

<!-- header.phpの読み込み -->
<? get_header(); ?>

<main>
    <?php // ブログ記事を表示する start ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php // タイトルを表示する start ?>
        <h1 class="blog-detail__title"><?php the_title(); ?></h1>
        <?php // タイトルを表示する end ?>

        <?php // アイキャッチ画像を表示する start ?>
        <?php if(has_post_thumbnail()): ?>
            <div class="blog-detail__image">
                <img src="<?php the_post_thumbnail_url('large'); ?>">
            </div>
        <?php endif; ?>
        <?php // アイキャッチ画像を表示する end ?>

        <?php // 本文を表示する start ?>
        <div class="blog-detail__body">
            <div class="blog-content"><?php echo the_content(); ?></div>
        </div>
        <?php // 本文を表示する end ?>

    <?php endwhile; endif; ?>
    <?php // ブログ記事を表示する end ?>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();