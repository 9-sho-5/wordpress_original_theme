<?php
/*
【 管理画面上で固定ページに適用するテンプレートページ名 】
Template Name: 【投稿】Blog：一覧ページ
*/
?>

<!-- header.phpの読み込み -->
<? get_header(); ?>

<main>
  <div class="wrapper">
    <!--メイン-->
    <main class="main_contents">

      <? #php 投稿の取得設定 
      ?>
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'blog',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <!-- ループ前の開始タグ -->
        <div class="news_wrap mt-100">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- 出力したい処理を記述 -->
            <div class="news_item mb-15 py-30" style="border-top: 1px solid black;">
              <a href="<?php echo get_permalink(); ?>">
                <span class="fs-16 mr-15"><?php the_time('Y.m.d'); ?></span>
                <span class="fs-12 cat"><?php $cat = get_the_category();
                                        $cat = $cat[0]; {
                                          echo $cat->cat_name;
                                        } ?></span>
                <p class="title my-15 fs-18"><?php the_title(); ?></p>
                <? #php pタグの挿入禁止 
                ?>
                <?php remove_filter('the_content', 'wpautop'); ?>
                <?php the_content(); ?>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <!-- ループ後の閉じタグ -->
      <?php endif;
      wp_reset_postdata(); ?>

    </main>
  </div>
</main>

<!-- footer.phpの読み込み -->
<?php get_footer();
