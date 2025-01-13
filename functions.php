<?php
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

/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = '実績';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = '実績';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('新規投稿を追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );


// アイキャッチの設定
  add_theme_support('post-thumbnails');

// 管理画面のカスタム投稿一覧にカテゴリー(ターム)を表示
function add_custom_column( $defaults ) {
  $defaults['area'] = '地域'; // 『area』はタクソノミースラッグ(複数設定可)
  return $defaults;
}
add_filter('manage_news_posts_columns', 'add_custom_column'); // ここの『news』はカスタム投稿タイプスラッグ
function add_custom_column_id($column_name, $id) {
  $terms = get_the_terms($id, $column_name);
  if ( $terms && ! is_wp_error( $terms ) ){
    $news_links = array(); // ここの『news』は変えなくてもOKだが、カスタム投稿タイプスラッグがおすすめ
    foreach ( $terms as $term ) {
      $news_links[] = $term->name;
    }
    echo join( ", ", $news_links );
  }
}
add_action('manage_news_posts_custom_column', 'add_custom_column_id', 10, 2); // ここの『news』はカスタム投稿タイプスラッグ


add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}