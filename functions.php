<?php
// 投稿メニュー非表示処理
function remove_menus(){
	// remove_menu_page( 'edit.php' );		// 投稿メニュー
	remove_menu_page( 'upload.php' );	// メディア
}
// remove_menus()呼び出し
add_action( 'admin_menu', 'remove_menus' );

// 管理画面の非表示をデフォルトに設定
add_filter( 'show_admin_bar', '__return_false' );

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

//-----------------------------------------------------
// 固定ページを自動生成する方法
//-----------------------------------------------------
function create_pages_and_setting() {
  // 作成したい固定ページのタイトル名・スラッグを入れる。
    $pages_array = [
      array('title'=>'トップページ', 'name'=>'top-page', 'parent'=>''),
      array('title'=>'会社概要', 'name'=>'about-us', 'parent'=>''),
      array('title'=>'お問い合わせフォーム', 'name'=>'contact', 'parent'=>''),
      array('title'=>'ニュース一覧', 'name'=>'news', 'parent'=>''),
      array('title'=>'ブログ一覧', 'name'=>'blog', 'parent'=>''),
    ];
    foreach ($pages_array as $value) {
        setting_pages($value);
    }
}
  
function setting_pages( $val ) {    
    //親ページ判別
    if(!empty($val['parent'])){
        $parent_id = get_page_by_path($val['parent']);
        $parent_id = $parent_id->ID;
        $page_slug = $val['parent'] . "/" . $val['name'];
    }else{
        $parent_id = "";
        $page_slug =$val['name'];
    }
    if ( empty(get_page_by_path( $page_slug ))) {
        //固定ページがなければ作成
        $insert_id = wp_insert_post(
            array(
                'post_title'   => $val['title'],
                'post_name'    => $val['name'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_parent'  => $parent_id,
                'post_content' => '',
            )
        );
    }else{
        //固定ページがすでにあれば更新
        $page_obj = get_page_by_path( $page_slug );
        $page_id = $page_obj->ID;
        $base_post = array(
            'ID'           => $page_id,
            'post_title'   => $val['title'],
            'post_name'    => $val['name'],
        );
        wp_update_post( $base_post );
    }
}
add_action('after_setup_theme', 'create_pages_and_setting');

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type(
    'news',	// カスタム投稿名
    array(
      'label' => 'ニュース',	// カスタム投稿の名前
	    'labels' => array(
        'name' => 'News', // 投稿タイプの一般名
        'singular_name' => 'news', // この投稿タイプのオブジェクト1個の名前
      ),
      'public' => true,		// 利用する場合はtrueに設定
      'has_archive' => true,	// アーカイブの有効設定
      'menu_position' => 4,   // 管理画面のサイドバーでの表示位置指定
      'supports' => array(		// 投稿画面の設定
        'title',	// タイトル
        'editor',	// 記事エディタ
        'thumbnail',// サムネイル
        'revisions',// リビジョン
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
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

}

// アイキャッチ画像のサポート許可
add_theme_support('post-thumbnails');