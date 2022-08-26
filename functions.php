<?php
// 投稿メニュー非表示
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  remove_menu_page( 'edit.php' ); //投稿メニュー
  remove_menu_page( 'upload.php' ); //メディア
}

function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css' );

	//JavaScriptの読み込みはここから
	wp_enqueue_script('main', get_template_directory_uri().'/assets/javascript/main.js');
	
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

/* カスタム投稿 */
// add_action('init', 'add_custom_post');
// function add_custom_post() {

//   register_post_type(
//     'services',
//     array(
//       'label' => '施策一覧',
//       'labels' => array(
//         'name' => '施策一覧', // 投稿タイプの一般名
//         'singular_name' => '施策', // この投稿タイプのオブジェクト1個の名前
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'menu_position' => 5,
//       'supports' => array(
//         'title',
//       )
//     )
//   );

// }

/* タクソノミー */
// add_action('init', 'create_taxonomy');
// function create_taxonomy(){
	
// 	register_taxonomy(
// 		'service_cat',  // タクソノミーのスラッグ
// 		'services', // どの投稿タイプに追加するか
// 		$args = array(
//       'label'              => '施策カテゴリ',     // タクソノミー名
//       'public'             =>  true,              // 公開するかどうか
//       'hierarchical'       =>  true               // 階層を持たせるかどうか
//     )
// 	);
// }