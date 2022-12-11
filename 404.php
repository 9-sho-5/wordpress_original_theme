<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: 404 Not Found ページ
*/
?>

<!-- header.phpの読み込み -->
<? get_header(); ?>

<main>
    <h1 style="position: relative; top: 50%; left: 50%; transform: translateX(-50%); display: block; width: 100vw; height: 100vh; text-align: center; line-height: 100vh;">
        <span>404</span>
        <br>
        <span>Page Not Found</span>
    </h1>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();