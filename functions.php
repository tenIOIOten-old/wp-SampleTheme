<?php

// Support To Post Thumbnail.
add_theme_support( 'post-thumbnails' );

/*  存在しないページを指定された場合は 404 ページを表示する  */
function redirect_404() {
    //メインページ・シングルページ・アーカイブ（月別）・固定ページ 以外の指定の場合 404 ページを表示する
    if(is_home() || is_single() || is_search() || is_category() || is_month() || is_day() || is_page()) return;
    include(TEMPLATEPATH . '/404.php');
    exit;
  }
  add_action('template_redirect', 'redirect_404');
//   Restrict letters
add_filter('the_excerpt', 'my_the_excerpt');
function my_the_excerpt($postContent) {
    $postContent = mb_strimwidth($postContent, 0, 80, "…more","UTF-8");
    return $postContent;
}
  // wegit
function widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Left Widget',
		'id'            => 'footer-left-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'description'   => 'フッターの左側にウィジットを追加します',
    'class'         => 'fotter-left-widget',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
  ) );
    register_sidebar( array(
        'name'          => 'Sidebar Widget',
        'id'            => 'sidebar-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'description'   => 'サイドバーにウィジットを追加します',
    'class'         => 'fotter-left-widget',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => 'Header Nav Widget',
        'id'            => 'header-nav-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'description'   => 'ヘッダーにウィジットを追加します',
    'class'         => 'fotter-left-widget',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );

  // common setting
  function print_name(){
      echo "Shiratori Tenta";
  }