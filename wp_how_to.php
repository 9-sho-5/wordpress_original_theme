<!-- テンプレート呼び出し -->
<?php get_template_part('テンプレート名'); ?>

<!-- imgタグのsrc呼び出し -->
<img src="<?php echo get_template_directory_uri(); ?>/./assets/images/〇〇" alt="〇〇">

<!-- aタグのhref設定 -->
<a href="<?php echo esc_url(home_url('/相対パス')); ?>"></a>

<!-- レスポンシブ -->
<style>
  /* 指定のpx以下のスタイリング */
  @media screen and (max-width: 〇〇px) {}
</style>
