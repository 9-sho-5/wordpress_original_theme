<?php
// 投稿メニュー非表示処理
function remove_menus(){
	// remove_menu_page( 'edit.php' );		// 投稿メニュー
	remove_menu_page( 'upload.php' );	// メディア
}
// remove_menus()呼び出し
add_action( 'admin_menu', 'remove_menus' );

// functions.phpからのCSSの読み込み処理
function add_css_js() {
	// CSSの読み込み
	wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css');	// リセットcss読み込み
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css' );	// メインのcss読み込み
	
	/*
		=== JavaScriptの読み込み ===
		JavaScriptの処理によってDOMの読み込んでからの処理が望ましい場合があるため、footer.php末に記述している
	*/
	// wp_enqueue_script('main', get_template_directory_uri().'/assets/javascript/main.js');	// メインJavaScriptの読み込み
}

// add_scripts()呼び出し
add_action('wp_enqueue_scripts', 'add_css_js');

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type(
    'news',
    array(
      'label' => 'ニュース',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

}
// アイキャッチ画像のサポート許可
add_theme_support('post-thumbnails');